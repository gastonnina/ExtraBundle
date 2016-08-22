<?php

namespace Gastonnina\ExtraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GasExtraBundle:Default:index.html.twig');
    }
}
