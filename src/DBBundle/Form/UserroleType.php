<?php

namespace DBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserroleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',array('label'=>'Name','attr'=>array('class'=>"form-control",'placeholder'=>'Name...')))
            ->add('description','text',array('label'=>'Description','attr'=>array('class'=>"form-control",'placeholder'=>'Description...')))
            ->add('status', 'choice', array(
                'label' => 'Select Status',
                'label_attr' => array('style' =>'padding-left:0px'),
                'choices' => array(1 => 'Active', 0 => 'Inactive'),
                'empty_value' => '-- Select Status --',
                'attr' => array('class'=>"form-control")

            ))
            ->add('submit', 'submit',array('attr'=>array('class'=>"btn btn-primary",'style' =>'margin-top: 13px;width: 100%;')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DBBundle\Entity\Userrole'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dbbundle_userrole';
    }
}
