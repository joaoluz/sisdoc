<?php
namespace Modules\LoginBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Usuario extends EntityRepository
{
	protected $repository = "ModulesLoginBundle:Usuario";

    public function logar($params)
    {
        $queryBuilder =  $this->_em->createQueryBuilder()
                              ->select('u.idUsuario')
                              ->from('ModulesLoginBundle:Usuario','u')
                              ->where('u.cpf = :cpf')
                              ->andWhere('u.senha = :senha')
                              ->setParameter('cpf',$params['cpf'])
                              ->setParameter('senha',$params['senha']);

        return $queryBuilder->getQuery()->execute();
    }

}