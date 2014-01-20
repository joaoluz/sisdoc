<?php

namespace Modules\UserBundle\Controller;

use abstraction\controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function newAction()
    {
        return $this->render(
            'ModulesUserBundle:User:new.html.twig',array()
        );
    }

    public function save()
    {
        $params = $this->getAllParams();

        var_dump($params);die;
    }
}
