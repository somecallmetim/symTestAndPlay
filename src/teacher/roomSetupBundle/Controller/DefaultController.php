<?php

namespace teacher\roomSetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('roomSetupBundle:Default:index.html.twig', array('name' => 'World!'));
    }
}
