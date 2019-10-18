<?php

namespace RL\SLAMBundle\Controller;

use RL\SLAMBundle\Entity\Candidat;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction()    {
        return $this->render('RLSLAMBundle:Default:presentation.html.twig');
    }


}

