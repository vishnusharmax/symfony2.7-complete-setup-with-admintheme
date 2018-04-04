<?php

namespace DBBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdminUserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
              $builder
                  ->add('name','text',array('label'=>'Name','attr'=>array('class'=>"form-control",'placeholder'=>'Name...')))
                  ->add('email','email',array('label'=>'Email','attr'=>array('class'=>"form-control",'placeholder'=>'Email...')))
                  ->add('mobile','text',array('label'=>'Mobile','attr'=>array('class'=>"form-control",'placeholder'=>'Mobile...')))
                  ->add('status', 'choice', array(
                      'label' => 'Select Status',
                      'label_attr' => array('style' =>'padding-left:0px'),
                      'choices' => array(1 => 'Active', 0 => 'Inactive'),
                      'empty_value' => '-- Select Status --',
                      'attr' => array('class'=>"form-control")

                  ))
                  ->add('userrole', 'entity', array(
                      'class' =>'DBBundle\Entity\Userrole',
                      'choice_label' => 'name',
                      'query_builder'=>function(EntityRepository $e){
                          return $e->createQueryBuilder('u')->where('u.status=1');
                      },
                      'label' => 'Select Role',
                      'label_attr' => array('style' =>'padding-left:0px'),
                      'empty_value' => '-- Select Role--',
                      'attr' => array('class'=>"form-control")
                  ))
                  ->add('image', 'vlabs_file', array(
                      'required' => false
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
            'data_class' => 'DBBundle\Entity\AdminUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dbbundle_adminuser';
    }
}
