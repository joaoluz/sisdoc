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

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string")
     */
    private $email;


    /**
     * @var string $senha
     *
     * @ORM\Column(name="senha", type="string")
     */
    private $senha;


    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

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