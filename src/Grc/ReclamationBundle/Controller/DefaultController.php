<?php

namespace Grc\ReclamationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GrcReclamationBundle:Default:index.html.twig', array('name' => $name));
    }
}
