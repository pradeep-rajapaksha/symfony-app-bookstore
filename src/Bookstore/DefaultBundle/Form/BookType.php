<?php

namespace Bookstore\DefaultBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\NumberType; 
use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class BookType extends AbstractType
{
    private $categories;
    private $em;

    public function __construct() { // $em
        // $this->em = $em;
        // $this->categories = $em->getRepository('BookstoreDefaultBundle:Category')->findAll();
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('author', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('isbn', NumberType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('publication', DateType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('publisher', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
            ->add('category_id', EntityType::class, array( 
                    'class' => 'BookstoreDefaultBundle:Category',
                    'choice_label' => 'name',
                    'attr' => array('class' => 'form-control col-md-6')
                )
            )
            ->add('price', NumberType::class, array('attr' => array('class' => 'form-control col-md-6', 'min' => '0.01', 'step' => "0.01")))
            ->add('availability', CheckboxType::class, array('attr' => array('class' => '')))
            ->add('shelf', TextType::class, array('attr' => array('class' => 'form-control col-md-6')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bookstore\DefaultBundle\Entity\Book'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bookstore_defaultbundle_book';
    }
}
