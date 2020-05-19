<?php
namespace Bookstore\DefaultBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class CreateOrderRequest
{

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $name; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $email; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $contact; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $address1; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $address2; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $postcode; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $suburb; 

    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    public $state; 

}