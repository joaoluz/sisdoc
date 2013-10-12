<?php

namespace Modules\LayoutBundle\Controller;

use abstraction\controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/login")
 */
class LoginController extends AbstractController
{
    /**
     * @Route("/logar", name="logar", options={"expose"=true})
     */
    public function logarAction()
    {
        $params = $this->getRequestJson();

        $loginBusiness = $this->get("LoginBusiness");
        $retorno = $loginBusiness->logar($params);

        return new Response(json_encode($retorno));
    }

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
