<?php
namespace Modules\AuthenticateBundle\Services;

use Modules\AuthenticateBundle\Entity\Usuario;

use abstraction\service\AbstractService;

class AuthenticateService extends AbstractService
{
    public function logar($params)
    {
        $result = $this->getRepository('ModulesAuthenticateBundle:Usuario')->logar($params);
        $retorno["success"] = 0;
        if (isset($result) && !empty($result)) {
            $retorno["success"] =  1;
        }

        return $retorno;
    }
}