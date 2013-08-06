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
    	$a = $this->get('Modules.LoginBusiness')->pesquisa();
    	var_dump($a);die;
        return array('name' => $name);
    }
}
