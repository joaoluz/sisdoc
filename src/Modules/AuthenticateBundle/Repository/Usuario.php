<?php
/**
 * Created by IntelliJ IDEA.
 * User: joao.luz
 * Date: 14/11/13
 * Time: 14:16
 * To change this template use File | Settings | File Templates.
 */
namespace Modules\AuthenticateBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Usuario extends EntityRepository
{
    public function logar($params)
    {
        $queryBuilder = $this->createQueryBuilder("u")
             ->where('u.nuCpf = :cpf')
             ->andWhere("u.dsSenha = :senha")
             ->setParameter('cpf',$params["cpf"])
             ->setParameter("senha",$params["senha"]);

        return $queryBuilder->getQuery()->execute();
    }
}