<?php

namespace Modules\UsuarioBundle\Services;
use abstraction\service\AbstractService;

/**
 * Created by IntelliJ IDEA.
 * User: joao.luz
 * Date: 19/01/14
 * Time: 23:17
 */
class Usuario extends AbstractService
{
    public function getUsuario()
    {
        return $this->getRepository('ModuleAuthenticationBundle:Usuario')->findAll();
    }
}