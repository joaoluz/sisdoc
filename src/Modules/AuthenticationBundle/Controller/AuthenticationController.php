<?php

namespace Modules\AuthenticationBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use abstraction\controller\AbstractController;
use Symfony\Component\Security\Core\SecurityContext;
class AuthenticationController extends AbstractController
{
    public function loginAction()
    {
        $request = $this->getRequest();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'ModulesAuthenticationBundle:Authentication:login.html.twig',array(
                'cpf' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
                'error'         => $error
            )
        );
    }

    public function loginCheckAction()
    {
    }

    public function logoutAction()
    {
    }

}
