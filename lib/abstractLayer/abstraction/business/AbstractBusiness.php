<?php
namespace abstraction\business;

abstract class AbstractBusiness 
{
	protected $container;
	
	protected $entityName;
	
	public function __construct($containerInterface) 
	{
		$this->container = $containerInterface;
	}
	
	public function getEntityManager()
	{
		return $this->container->get('doctrine')->getEntityManager();
	}
	
	public function getReposistory($entityName)
	{
		return $this->container->get('doctrine')->getEntityManager()->getRepository($entityName);
	}
	
	public function find($id)
	{
		return $this->container->get('doctrine')->getEntityManager()->getRepository($this->entityName)->find($id);		
	}
	
	public function findBy($criteria)
	{
		return $this->container->get('doctrine')->getEntityManager()->getRepository($this->entityName)->findBy($criteria);		
	}
	
	public function findOneBy($criteria)
	{
		return $this->container->get('doctrine')->getEntityManager()->getRepository($this->entityName)->findOneBy($criteria);		
	}
	
	public function findAll()
	{
		return $this->container->get('doctrine')->getEntityManager()->getRepository($this->entityName)->findAll();		
	}
}