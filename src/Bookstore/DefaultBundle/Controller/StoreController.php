<?php

namespace Bookstore\DefaultBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bookstore\DefaultBundle\Entity\Book;
use Bookstore\DefaultBundle\Entity\Category;


class StoreController extends Controller
{
    /**
     * Lists all Book entities.
     *
     * @Route("/", name="store")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('BookstoreDefaultBundle:Book')->findAll();
        $categories = $em->getRepository('BookstoreDefaultBundle:Category')->findBy(array('status' => 'active'));

        return array(
            'books' => $books,
            'categories' => $categories,
        );
    }

    /**
     * Finds and displays a Book entity.
     *
     * @Route("/book/{id}", name="show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BookstoreDefaultBundle:Book')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Book entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
