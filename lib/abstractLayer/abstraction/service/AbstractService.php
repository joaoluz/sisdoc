<?php
namespace abstraction\service;

abstract class AbstractService
{
    protected $container;

    protected $entityManager;

    public function __construct($containerInterface, $entityManager)
    {
        $this->container = $containerInterface;
        $this->entityManager = $entityManager;
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }

    public function getRepository($entityName)
    {
        return $this->entityManager->getRepository($entityName);
    }
}