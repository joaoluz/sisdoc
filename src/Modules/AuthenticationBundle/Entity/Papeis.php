<?php
namespace Modules\AuthenticationBundle\Entity;
/**
 * Created by IntelliJ IDEA.
 * User: joao.luz
 * Date: 21/11/13
 * Time: 01:24
 * To change this template use File | Settings | File Templates.
 */

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Table(name="papeis")
 * @ORM\Entity(repositoryClass="Modules\AuthenticationBundle\Repository\Papeis")
 */
class Papeis
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="id_papel", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPapel;

    /**
     * @var string $noPapel
     *
     * @ORM\Column(name="no_papel", type="string")
     */
    private $noPapel;

    /**
     * @var string $dsIdentificador
     *
     * @ORM\Column(name="ds_identificador", type="string")
     */
    private $dsIdentificador;

    /**
     * @var string $dtCriacao
     *
     * @ORM\Column(name="dt_criacao", type="date")
     */
    private $dtCriacao;

    /**
     * @param string $dsIdentificador
     */
    public function setDsIdentificador($dsIdentificador)
    {
        $this->dsIdentificador = $dsIdentificador;
    }

    /**
     * @return string
     */
    public function getDsIdentificador()
    {
        return $this->dsIdentificador;
    }

    /**
     * @param string $dtCriacao
     */
    public function setDtCriacao($dtCriacao)
    {
        $this->dtCriacao = $dtCriacao;
    }

    /**
     * @return string
     */
    public function getDtCriacao()
    {
        return $this->dtCriacao;
    }

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
     * @param string $noPapel
     */
    public function setNoPapel($noPapel)
    {
        $this->noPapel = $noPapel;
    }

    /**
     * @return string
     */
    public function getNoPapel()
    {
        return $this->noPapel;
    }


}