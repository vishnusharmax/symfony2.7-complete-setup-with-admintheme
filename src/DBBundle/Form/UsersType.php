<?php

namespace DBBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname','text',array('label'=>'First Name','attr'=>array('class'=>"form-control",'placeholder'=>'First Name')))
            ->add('middlename','text',array('label'=>'Middle Name','attr'=>array('class'=>"form-control",'placeholder'=>'Middle Name')))
            ->add('lastname','text',array('label'=>'Last Name','attr'=>array('class'=>"form-control",'placeholder'=>'Last Name')))
            ->add('password','password',array('label'=>'Password','attr'=>array('class'=>"form-control",'placeholder'=>'Password')))
            ->add('email','email',array('label'=>'Email','attr'=>array('class'=>"form-control",'placeholder'=>'Email')))
            ->add('mobile','text',array('label'=>'Mobile','attr'=>array('class'=>"form-control",'placeholder'=>'Mobile')))
            ->add('latitude','text',array('label'=>'Latitude','attr'=>array('class'=>"form-control",'placeholder'=>'Latitude')))
            ->add('longitude','text',array('label'=>'Longitude','attr'=>array('class'=>"form-control",'placeholder'=>'Longitude')))
            ->add('vpid','text',array('label'=>'VPID','attr'=>array('class'=>"form-control",'placeholder'=>'VPID')))
            ->add('dob','date',array('label'=>'DOB','attr'=>array('class'=>"form-control")))
            ->add('mycredit','text',array('label'=>'Enter Credit','attr'=>array('class'=>"form-control",'placeholder'=>'Enter Credit')))
            ->add('status', 'choice', array(
                'label' => 'Select Status',
                'label_attr' => array('style' =>'padding-left:0px'),
                'choices' => array(0 => 'Active', 1 => 'Inactive'),
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
            'data_class' => 'DBBundle\Entity\Users'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dbbundle_users';
    }
}
