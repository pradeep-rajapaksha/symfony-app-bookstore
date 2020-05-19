<?php

namespace Tests\Bookstore\DefaultBundle\Entity;

use Bookstore\DefaultBundle\Entity\Book;
use Bookstore\DefaultBundle\Entity\Category;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    /**
     * Check the Book entity for default category
     */
    public function testBookHasNoCategoriesByDefault()
    {
        $book = new Book();
        $this->assertEmpty($book->getCategory());
    }

    /**
     * Check add categories to book
     */
    public function testBookShouldHaveCategory()
    {
        $book = new Book();
        $book->setCategory(new Category());
        $this->assertNotEmpty($book->getCategory());
    }

}