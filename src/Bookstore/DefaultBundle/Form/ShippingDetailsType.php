<?php

namespace Bookstore\DefaultBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType; 

class ShippingDetailsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Name')))
            ->add('email', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Email')))
            ->add('contact', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Contact No')))
            ->add('address1', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Address Line 1')))
            ->add('address2', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Address Line 2')))
            ->add('postcode', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Postcode')))
            ->add('suburb', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'Suburb')))
            ->add('state', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control mb-3', 'placeholder' => 'State')));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bookstore\DefaultBundle\Entity\CreateOrderRequest'
        ));
    }

}
