<?php

namespace Bookstore\DefaultBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Security controller.
 *
 * @Route("/store")
 */
class SecurityController extends Controller
{

    /**
     *
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {   
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // return $this->render('Security/login.html.twig', [
        //     'last_username' => $lastUsername,
        //     'error'         => $error,
        // ]);

        return array(
            'username' => $lastUsername,
            'errors'         => $error,
        );    
    }

    /**
     *
     * @Route("/logout", name="logout")
     * @Template()
     */
    public function logoutAction() {}
}