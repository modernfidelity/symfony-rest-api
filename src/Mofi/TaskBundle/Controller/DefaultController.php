<?php

namespace Mofi\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MofiTaskBundle:Default:index.html.twig');
    }
}
