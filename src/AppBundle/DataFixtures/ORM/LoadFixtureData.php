<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

use Bookstore\DefaultBundle\Entity\User;
use Bookstore\DefaultBundle\Entity\Book;
use Bookstore\DefaultBundle\Entity\Category;
use Bookstore\DefaultBundle\Entity\Order;
use Bookstore\DefaultBundle\Entity\OrderBook;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadFixtureData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     */
    public function load(ObjectManager $manager)
    {
        // User
            $user = new User();
            $user->setFirstname('Pradeep');
            $user->setLastname('Rajapaksha');
            $user->setEmail('pradeepprasanna.rajapaksha4@gmail.com');
            $user->setUsername('pradeep');

            $encoders = $this->container->get('security.password_encoder');
            $password = $encoders->encodePassword($user, '1234');
            $user->setPassword($password);
            $user->setStatus('active');

            $manager->persist($user);
            $manager->flush();

        // Category #1
            $category1 = new Category();
            $category1->setName('Children');
            $category1->setStatus('active');

            $manager->persist($category1);
            $manager->flush();

        // Category #2
            $category2 = new Category();
            $category2->setName('Fiction');
            $category2->setStatus('active');

            $manager->persist($category2);
            $manager->flush();

        // Books #1 
            $book1 = new Book();
            $book1->setTitle('To Kill a Mockingbird');
            $book1->setAuthor('Harper Lee');
            $book1->setIsbn('8923568723578923');
            $book1->setPublication(new \DateTime('2015-07-11'));
            $book1->setPublisher('Harper Perennial Modern Classics');
            $book1->setPrice('500');
            $book1->setAvailability(true);
            $book1->setShelf('1');
            $book1->setCategoryId($category2);

            $manager->persist($book1);
            $manager->flush();

        // Book #2
            $book2 = new Book();
            $book2->setTitle("Harry Potter and the Sorcerer's Stone (Harry Potter #1)");
            $book2->setAuthor('J.K. Rowling, Mary GrandPré');
            $book2->setIsbn('9780439554930');
            $book2->setPublication(new \DateTime('2015-11-01'));
            $book2->setPublisher('Scholastic Inc');
            $book2->setPrice('650');
            $book2->setAvailability(true);
            $book2->setShelf(1);
            $book2->setCategoryId($category2);

            $manager->persist($book2);
            $manager->flush();

        // Book #3
            $book3 = new Book();
            $book3->setTitle('Winnie The Pooh');
            $book3->setAuthor('A. A. Milne');
            $book3->setIsbn('9780563536772');
            $book3->setPublication(new \DateTime('2002-08-05'));
            $book3->setPublisher('BBC Physical Audio');
            $book3->setPrice('2250.00');
            $book3->setAvailability(true);
            $book3->setShelf(1);
            $book3->setCategoryId($category1);

            $manager->persist($book3);
            $manager->flush();

    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
