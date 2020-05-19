<?php

namespace Bookstore\DefaultBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType; 

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('email', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('contact', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('address1', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('address2', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('postcode', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('suburb', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('state', TextType::class, array('attr' => array('class' => 'form-control col-md-6')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bookstore\DefaultBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookstore_defaultbundle_customer';
    }


}
