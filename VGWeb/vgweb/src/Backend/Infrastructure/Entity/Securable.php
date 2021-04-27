<?php

namespace App\Backend\Infrastructure\Entity;

use App\Repository\SecurableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SecurableRepository::class)
 */
class Securable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $action;

    /**
     * @ORM\Column(type="boolean")
     */
    private $readProperty;

    /**
     * @ORM\Column(type="boolean")
     */
    private $updateProperty;

    /**
     * @ORM\Column(type="boolean")
     */
    private $createProperty;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleteProperty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getReadProperty(): ?bool
    {
        return $this->readProperty;
    }

    public function setReadProperty(bool $readProperty): self
    {
        $this->readProperty = $readProperty;

        return $this;
    }

    public function getUpdateProperty(): ?bool
    {
        return $this->updateProperty;
    }

    public function setUpdateProperty(bool $updateProperty): self
    {
        $this->updateProperty = $updateProperty;

        return $this;
    }

    public function getCreateProperty(): ?bool
    {
        return $this->createProperty;
    }

    public function setCreateProperty(bool $createProperty): self
    {
        $this->createProperty = $createProperty;

        return $this;
    }

    public function getDeleteProperty(): ?bool
    {
        return $this->deleteProperty;
    }

    public function setDeleteProperty(bool $deleteProperty): self
    {
        $this->deleteProperty = $deleteProperty;

        return $this;
    }
}
