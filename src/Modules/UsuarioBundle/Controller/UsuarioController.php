<?php

namespace Modules\UsuarioBundle\Controller;

use abstraction\controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends AbstractController
{
    public function cadastroAction()
    {
        return $this->render(
            'ModulesUsuarioBundle:Usuario:cadastro.html.twig',array()
        );
    }

    public function salvar()
    {
        $params = $this->getAllParams();

        var_dump($params);die;
    }
}
