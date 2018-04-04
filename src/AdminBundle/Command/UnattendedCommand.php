<?php

namespace AdminBundle\Command;

use CommonBundle\Helpers\EntityHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class UnattendedCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:unattendedmail')
            // the short description shown while running "php bin/console list"
            ->setDescription('Mail for unattended services')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to send mail for unattended service');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $finddata = $em->getRepository('DBBundle:Jobs')->pendingjob();
        $to = array();
        $machines = array();
        $subject = 'Unattended Service Requests';
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('vs@gmail.com')
            ->setPassword('password');
        $mailer = new \Swift_Mailer($transport);
        foreach ($finddata as $usersdata) {
            $findjobsdataobj = $em->getRepository('DBBundle:Jobs')->findOneBy(array('id' => $usersdata['id']));
            if ($findjobsdataobj) {
                $findjobsdataobj->setJobemail(1);
                $em->merge($findjobsdataobj);
                $em->flush();
            }
            $to[] = 'vs@gmail.com';
            $todata = array_unique($to);
            if (count($todata) > 0) {
                $message = (new \Swift_Message($subject))
                    ->setFrom(['vs@gmail.com' => 'VS'])
                    ->setTo($todata)
                    ->setBody($this->getContainer()->get('templating')->render(
                        'ServiceBundle:Default:jobpendingemail.html.twig',
                        array('jobdata' => $finddata, 'jobmachine' => $machines)
                    ), 'text/html');

                $resultdata = $mailer->send($message);
            }
            // outputs a message followed by a "\n"
            $output->writeln('Task Complete');


        }
    }
}
