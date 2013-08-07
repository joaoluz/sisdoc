<?php
namespace abstraction\controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


abstract class AbstractController extends Controller
{
	public function indexAction()
	{		
	}
	
	public function getAllParams()
	{
		$request = $this->get('request');
		return current($request->request);
	}
	
	public function getParam($id)
	{
		$request = $this->get('request');
		$param = current($request->request);
		
		return $param[$id];
	} 	
}