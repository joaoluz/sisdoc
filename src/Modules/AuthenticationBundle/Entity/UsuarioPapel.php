<?php
namespace Modules\AuthenticationBundle\Entity;
/**
 * Created by IntelliJ IDEA.
 * User: joao.luz
 * Date: 21/11/13
 * Time: 01:30
 * To change this template use File | Settings | File Templates.
 */

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Table(name="usuario_papel")
 * @ORM\Entity(repositoryClass="Modules\AuthenticationBundle\Repository\UsuarioPapel")
 */
class UsuarioPapel
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(name="id_usuario_papel", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUsuarioPapel;

    /**
     * @ORM\ManyToOne(targetEntity="Modules\AuthenticationBundle\Entity\Usuario", inversedBy="idUsuarioPapel")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     * })
     */
    private $idUsuario;

    /**
     * @ORM\ManyToOne(targetEntity="Modules\AuthenticationBundle\Entity\Papeis")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_papel", referencedColumnName="id_papel", nullable=false)
     * })
     */
    private $idPapel;

    /**
     * @param mixed $idPapel
     */
    public function setIdPapel($idPapel)
    {
        $this->idPapel = $idPapel;
    }

    /**
     * @return mixed
     */
    public function getIdPapel()
    {
        return $this->idPapel;
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
     * @param mixed $idUsuarioPapel
     */
    public function setIdUsuarioPapel($idUsuarioPapel)
    {
        $this->idUsuarioPapel = $idUsuarioPapel;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioPapel()
    {
        return $this->idUsuarioPapel;
    }
}
