<?php
namespace Modules\AuthenticationBundle\Services;

use Modules\AuthenticateBundle\Entity\Usuario;

use abstraction\service\AbstractService;

class AuthenticationService extends AbstractService
{
    public function getUser()
    {
        return $this->getRepository('ModulesAuthenticationBundle:User')->findAll();
    }
}