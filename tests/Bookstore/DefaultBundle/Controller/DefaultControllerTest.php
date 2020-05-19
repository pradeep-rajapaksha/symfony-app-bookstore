<?php

namespace Tests\Bookstore\DefaultBundle\Controller;

use Bookstore\DefaultBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    /*
    * Test if home page is correct
    */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
        $this->assertContains('Categories', $crawler->filter('.card-header')->text());
    }

    /*
    * Test if is correct
    */
    public function testBooksIndexPage()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'pradeepprasanna.rajapaksha4@gmail.com',
            'PHP_AUTH_PW' => '1234',
        ]);

        $crawler = $client->request('GET', '/store/book/');
        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
        $this->assertContains('Book List', $crawler->filter('.col-md-12 h4')->text());
    }

    /*
    * Test to add new category
    */
    public function testAddNewCategory()
    {
        $categoryName = 'Horror '.mt_rand();
        $categoryStatus = 'active';

        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'pradeepprasanna.rajapaksha4@gmail.com',
            'PHP_AUTH_PW' => '1234',
        ]);

        $crawler = $client->request('GET', '/store/category/new');
        $form = $crawler->selectButton('Save')->form([
            'name' => $categoryName,
            'status' => $categoryStatus,
        ]);
        $client->submit($form);

        $this->assertSame(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        $category = $client->getContainer()->get('doctrine')->getRepository(Category::class)->findOneBy([
            'name' => $categoryName,
        ]);
        $this->assertNotNull($category);
        $this->assertSame($categoryName, $category->getName());
        $this->assertSame($categoryStatus, $category->getStatus());
    }

    /*
    * Test to check edit category page
    */
    public function testShowEditCategoryPage()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'pradeepprasanna.rajapaksha4@gmail.com',
            'PHP_AUTH_PW' => '1234',
        ]);

        $client->request('GET', '/store/category/1/edit');
        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    /*
    * Test to edit category
    */
    public function testEditCategory()
    {
        $categoryName = 'Updated Horror Category '.mt_rand();
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'pradeepprasanna.rajapaksha4@gmail.com',
            'PHP_AUTH_PW' => '1234',
        ]);

        $crawler = $client->request('GET', '/store/category/1/edit');
        $form = $crawler->selectButton('Save')->form([
            'name' => $categoryName,
        ]);
        $client->submit($form);
        $this->assertSame(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());

        $category = $client->getContainer()->get('doctrine')->getRepository(Category::class)->find(1);
        $this->assertSame($categoryName, $category->getName());
    }

}
