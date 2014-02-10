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
        return new Response();
    }

    public function save()
    {
        die('joao');
        $params = $this->getAllParams();

        var_dump($params);die;
    }
}
