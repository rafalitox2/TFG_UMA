<?php

namespace App\Backend\Infrastructure\Entity\Order;

use App\Repository\OrderRepository;
use App\Backend\Infrastructure\Entity\User\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $ordered;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $shipped;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ship_to;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private  $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdered(): ?\DateTimeInterface
    {
        return $this->ordered;
    }

    public function setOrdered(\DateTimeInterface $ordered): self
    {
        $this->ordered = $ordered;

        return $this;
    }

    public function getShipped(): ?\DateTimeInterface
    {
        return $this->shipped;
    }

    public function setShipped(?\DateTimeInterface $shipped): self
    {
        $this->shipped = $shipped;

        return $this;
    }

    public function getShipTo(): ?string
    {
        return $this->ship_to;
    }

    public function setShipTo(string $ship_to): self
    {
        $this->ship_to = $ship_to;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
