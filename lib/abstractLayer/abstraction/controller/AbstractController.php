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
		return array_merge(current($request->request),current($request->query));
	}

	public function getParam($id)
	{
		$request = $this->get('request');
		$param = current($request->request);

		return $param[$id];
	}


    /**
     * Retorna os dados da requisição, caso tenham sido passados em JSON
     * @return array|null
     */
    protected function getRequestJson ()
    {
        $content = $this->getRequest()->getContent();
        return $content ? json_decode($content, true) : null;
    }
}