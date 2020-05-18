<?php

namespace Bookstore\DefaultBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 

class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            // ->add('status');
            ->add('status', ChoiceType::class, array( 
                    'choices'  => array( 
                        'active' => 'Active', 
                        'inactive' => 'Inactive', 
                    ), 
                    'attr' => array('class' => 'form-control col-md-6')
                )
            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
            'data_class' => 'Bookstore\DefaultBundle\Entity\Category'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bookstore_defaultbundle_category';
    }
}
