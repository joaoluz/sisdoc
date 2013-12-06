<?php
namespace Modules\AuthenticationBundle\Entity;

use Doctrine\Common\Util\Debug;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Modules\AuthenticationBundle\Repository\Usuario")
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUsuario;

    /**
     * @var string $email
     *
     * @ORM\Column(name="ds_email", type="string")
     */
    private $dsEmail;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string")
     */
    private $password;


    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string")
     */
    private $login;

    /**
     * @var string $cpf
     *
     * @ORM\Column(name="nu_cpf", type="string")
     */
    private $nuCpf;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string")
     */
    private $username;


    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Modules\AuthenticationBundle\Entity\UsuarioPapel", mappedBy="idUsuario")
     */
    private $usuarioPapel;

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $dsEmail
     */
    public function setDsEmail($dsEmail)
    {
        $this->dsEmail = $dsEmail;
    }

    /**
     * @return string
     */
    public function getDsEmail()
    {
        return $this->dsEmail;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param string $nuCpf
     */
    public function setNuCpf($nuCpf)
    {
        $this->nuCpf = $nuCpf;
    }

    /**
     * @return string
     */
    public function getNuCpf()
    {
        return $this->nuCpf;
    }

    /**
     * @param \Modules\AuthenticateBundle\Entity\ArrayCollection $usuarioPapel
     */
    public function setUsuarioPapel($usuarioPapel)
    {
        $this->usuarioPapel = $usuarioPapel;
    }

    /**
     * @return \Modules\AuthenticateBundle\Entity\ArrayCollection
     */
    public function getUsuarioPapel()
    {
        return $this->usuarioPapel;
    }



    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        $papeis = array();

        // we need to make sure to have at least one role
        foreach($this->getUsuarioPapel() as $papel) {
            $papeis[] = $papel->getIdPapel()->getDsIdentificador();
        }

        return $papeis;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->username;

    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {

    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
    }


    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized)
    {

    }
}