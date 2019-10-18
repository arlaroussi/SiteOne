<?php

namespace LAR\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/{valeur}")
     */
    public function indexAction($valeur)
    {
        return $this->render('LARWorkBundle:Default:index.html.twig', array('valeur'=>$valeur));
    }
}
