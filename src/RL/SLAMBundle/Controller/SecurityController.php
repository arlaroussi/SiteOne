<?php

namespace RL\SLAMBundle\Controller;

use RL\SLAMBundle\Repository\CandidatRepository;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use RL\SLAMBundle\Form\CandidatType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SecurityController extends Controller {



public function loginAction(AuthenticationUtils $authenticationUtils)
{
    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('security/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
}
    
}

    