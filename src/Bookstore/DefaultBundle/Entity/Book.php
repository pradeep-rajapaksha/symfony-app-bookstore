<?php

namespace Bookstore\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="books")
 * @ORM\Entity
 */
class Book
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication", type="date")
     */
    private $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255)
     */
    private $publisher;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="availability", type="boolean")
     */
    private $availability;

    /**
     * @var integer
     *
     * @ORM\Column(name="shelf", type="integer")
     */
    private $shelf;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     */
    private $category_id;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="books")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param  string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param  string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set isbn
     *
     * @param  string $isbn
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set publication
     *
     * @param  \DateTime $publication
     * @return Book
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \DateTime 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set publisher
     *
     * @param  string $publisher
     * @return Book
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set price
     *
     * @param  float $price
     * @return Book
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set availability
     *
     * @param  boolean $availability
     * @return Book
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return boolean 
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set shelf
     *
     * @param  integer $shelf
     * @return Book
     */
    public function setShelf($shelf)
    {
        $this->shelf = $shelf;

        return $this;
    }

    /**
     * Get shelf
     *
     * @return integer 
     */
    public function getShelf()
    {
        return $this->shelf;
    }

    /**
     * Set category_id
     *
     * @param  integer $category_id
     * @return Book
     */
    public function setCategoryId(\Bookstore\DefaultBundle\Entity\Category $category)
    {
        $this->category_id = $category;
        
        return $this;
    }
    
    /**
     * Get category
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set category
     *
     * @param  \Bookstore\DefaultBundle\Entity\Category $category
     * @return Book
     */
    public function setCategory(\Bookstore\DefaultBundle\Entity\Category $category)
    {
        $this->category = $category;
        
        return $this;
    }

    /**
     * Get category
     *
     * @return \Bookstore\DefaultBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

}
