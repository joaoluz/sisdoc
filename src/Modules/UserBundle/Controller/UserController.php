<?php

namespace Modules\UserBundle\Controller;

use abstraction\controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/new", name="modules.user.new", options={"expose"=true})
     */
    public function newAction()
    {
        return new Response();
    }

    /**
     * @Route("/save", name="modules.user.save", options={"expose"=true})
     */
    public function save()
    {
        $params = $this->getRequestJson();

        var_dump($params);die;
    }
}
