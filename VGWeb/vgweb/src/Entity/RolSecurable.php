<?php

namespace App\Entity;

use App\Repository\RolSecurableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RolSecurableRepository::class)
 */
class RolSecurable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $role_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $securable_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(int $role_id): self
    {
        $this->role_id = $role_id;

        return $this;
    }

    public function getSecurableId(): ?int
    {
        return $this->securable_id;
    }

    public function setSecurableId(int $securable_id): self
    {
        $this->securable_id = $securable_id;

        return $this;
    }
}
