<?php
namespace Modules\LoginBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Usuario extends EntityRepository
{
	protected $repository = "ModulesLoginBundle:Usuario";
}