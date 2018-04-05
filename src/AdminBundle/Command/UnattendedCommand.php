<?php

namespace AdminBundle\Command;

use CommonBundle\Helpers\EntityHelper;
use DBBundle\Entity\AdminUser;
use DBBundle\Entity\Userrole;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class UnattendedCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "app/console")
            ->setName('Login:loaddata')
            // the short description shown while running "php app/console list"
            ->setDescription('Create local users')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create dummy data for login');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $finddata = $em->getRepository('DBBundle:AdminUser')->findOneBy(array('email'=>'demo@gmail.com'));
        if($finddata){
            // outputs a message followed by a "\n"
            $output->writeln('Demo users already inside database!');
        }else{
            $roleobj = new Userrole();
            $roleobj->setName('Admin');
            $roleobj->setDescription('Role For Admin');
            $roleobj->setStatus(1);
            $roleobj->setIsdeleted(0);
            $roleobj->setDatecreated(new \DateTime());
            $roleobj->setDatemodified(new \DateTime());
            $roleobj->setCreatedby(1);
            $roleobj->setModifiedby(1);
            $em->persist($roleobj);
            $obj = new AdminUser();
            $obj->setName('Demo Hero');
            $obj->setEmail('demo@gmail.com');
            $obj->setStatus(1);
            $obj->setMobile('9412558532');
            $obj->setPassword(md5(123456));
            $obj->setDatecreated(new \DateTime());
            $obj->setDatemodified(new \DateTime());
            $obj->setCreatedby(1);
            $obj->setModifiedby(1);
            $obj->setUserrole($roleobj);
            $em->persist($obj);
            $em->flush();
            // outputs a message followed by a "\n"
            $output->writeln('Command successfully execute.Login Credential: Username: demo@gmail.com and password: 123456');
        }





    }
}
