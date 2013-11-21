<?php

namespace Modules\LayoutBundle\Controller;

use abstraction\controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends AbstractController
{
    /**
     * @Route("/internal/", name="Home", options={"expose"=true})
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/", name="start", options={"expose"=true})
     */
    public function startPageAction()
    {
        return $this->redirect($this->generateUrl("Home"));
    }
}
