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
 * @ORM\Table(name="tb_user_role")
 * @ORM\Entity(repositoryClass="Modules\AuthenticationBundle\Repository\UserRole")
 */
class UserRole
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(name="id_user_role", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $userRole;

    /**
     * @ORM\ManyToOne(targetEntity="Modules\AuthenticationBundle\Entity\User", inversedBy="userRole")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user", nullable=false)
     * })
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Modules\AuthenticationBundle\Entity\Roles")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_role", referencedColumnName="id_role", nullable=false)
     * })
     */
    private $role;

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
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $userRole
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
}
