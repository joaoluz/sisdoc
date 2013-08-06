<?php
namespace Modules\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Table(name="Usuario")
 * @ORM\Entity(repositoryClass="Modules\LoginBundle\Repository\Usuario")
 */
class Usuario 
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUsuario;

    /**
     * @var string $cpf
     *
     * @ORM\Column(name="CPF", type="string")
     */
    private $cpf;


    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}