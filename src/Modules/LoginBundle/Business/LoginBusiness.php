<?php
namespace Modules\LoginBundle\Business;

use Modules\LoginBundle\Entity\Usuario;

use abstraction\business\AbstractBusiness;

class LoginBusiness extends AbstractBusiness
{
	public function teste()
	{
		$entity = new Usuario();
		$entity->setCpf('12345678909');
		$em = $this->container->get('doctrine')->getEntityManager();
		$em->persist($entity);
		$em->flush();
		
		return $entity;
	}
	
	public function pesquisa()
	{
		$em = $this->container->get('doctrine')->getEntityManager();
		return $em->getRepository('ModulesLoginBundle:Usuario')->findAll();
	}

    public function logar($params)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        return $em->getRepository('ModulesLoginBundle:Usuario')->logar($params);
    }
}