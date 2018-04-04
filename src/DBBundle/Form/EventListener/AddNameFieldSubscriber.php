<?php

namespace DBBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddNameFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // Tells the dispatcher that you want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::PRE_SUBMIT => 'preSetData');
    }

    public function preSetData(FormEvent $event)
    {
        $product = $event->getData();
        $form = $event->getForm();

        if ($product->getId()) {
            $form->add('stateid', 'entity', array(
                'class' =>'DBBundle\Entity\State',
                'choice_label' => 'name',
                'query_builder'=>function(EntityRepository $e){
                    return $e->createQueryBuilder('u')->where('u.status=1');
                },
                'label' => 'Select State',
                'label_attr' => array('style' =>'padding-left:0px'),
                'empty_value' => '-- Select State--',
                'attr' => array('class'=>"form-control")
            ));
        }
    }
}
