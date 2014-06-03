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
 * @ORM\Table(name="tb_roles")
 * @ORM\Entity(repositoryClass="Modules\AuthenticationBundle\Repository\Roles")
 */
class Roles
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $role;

    /**
     * @var string $noRole
     *
     * @ORM\Column(name="no_role", type="string")
     */
    private $noRole;

    /**
     * @var string $dsIdentifier
     *
     * @ORM\Column(name="ds_identifier", type="string")
     */
    private $dsIdentifier;

    /**
     * @var string $dtCreate
     *
     * @ORM\Column(name="dt_create", type="date")
     */
    private $dtCreate;

    /**
     * @param string $dsIdentifier
     */
    public function setDsIdentifier($dsIdentifier)
    {
        $this->dsIdentifier = $dsIdentifier;
    }

    /**
     * @return string
     */
    public function getDsIdentifier()
    {
        return $this->dsIdentifier;
    }

    /**
     * @param string $dtCreate
     */
    public function setDtCreate($dtCreate)
    {
        $this->dtCreate = $dtCreate;
    }

    /**
     * @return string
     */
    public function getDtCreate()
    {
        return $this->dtCreate;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $noRole
     */
    public function setNoRole($noRole)
    {
        $this->noRole = $noRole;
    }

    /**
     * @return string
     */
    public function getNoRole()
    {
        return $this->noRole;
    }
}