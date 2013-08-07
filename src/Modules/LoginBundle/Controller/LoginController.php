<?php

namespace Modules\LoginBundle\Controller;

use abstraction\controller\AbstractController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Route("/login")
 * @Template()
 */
class LoginController extends AbstractController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
//     	$a = $this->get('Modules.LoginBusiness')->pesquisa();
//     	var_dump($a);die;
        return array('name' => '');
    }
    
    /**
     * @Route("/logar")
     * @Template()
     */
    public function logarAction()
    {
    	$params = $this->getParam('senha');
    	echo '<pre>';
    	var_dump($params);die;
    }
}
