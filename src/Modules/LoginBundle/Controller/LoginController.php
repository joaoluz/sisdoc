<?php

namespace Modules\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Route("/login")
 * @Template()
 */
class LoginController extends Controller
{
    /**
     * @Route("/teste")
     * @Template()
     */
    public function indexAction()
    {
    	var_dump($this->get('Modules.LoginBusiness')->teste());die;
        return array('name' => $name);
    }
}
