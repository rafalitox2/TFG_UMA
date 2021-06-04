<?php

namespace App\Backend\Infrastructure\Entity\Order;

use App\Backend\Infrastructure\Entity\Order\Item;
use App\Backend\Infrastructure\Entity\User\User;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
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
    private int $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $ordered;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private DateTimeInterface $shipped;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $ship_to;

    /**
     * @ORM\Column(type="integer")
     */
    private int $total;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private  $user;

    /**
     * @ORM\OneToMany(targetEntity=Item::class,mappedBy="order")
     */
    private  $items;



    public function __construct($id, $ordered, $shipped, $ship_to, $total)
    {
        $this->id = $id;
        $this->ordered = $ordered;
        $this->shipped = $shipped;
        $this->ship_to = $ship_to;
        $this->total = $total;
        $this->items = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdered(): ?DateTimeInterface
    {
        return $this->ordered;
    }

    public function getShipped(): ?DateTimeInterface
    {
        return $this->shipped;
    }

    public function getShipTo(): ?string
    {
        return $this->ship_to;
    }

    private function setDateTimeRange(DateTimeInterface $ordered, DateTimeInterface $shipped )
    {
        $this->ordered = $ordered;
        $this->shipped = $shipped;
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

    public function getItem()
    {
        return $this->items;
    }

}
