<?php


namespace App\Backend\Domain\Model\Order;


use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;

class OrderModel
{
    private int $id;
    //private UserModel $user;
    private DateTimeInterface $ordered;
    private DateTimeInterface  $shipped;
    private string $ship_to;
    private int $total;
    private $items;


    public function __construct(int $id, DateTimeInterface $ordered, DateTimeInterface $shipped,
                                string $ship_to, int $total)
    {
        $this->id = $id;
        $this->ordered = $ordered;
        $this->shipped = $shipped;
        $this->ship_to = $ship_to;
        $this->total = $total;
        $this->items = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getOrdered(): DateTimeInterface
    {
        return $this->ordered;
    }

    public function getShipped(): DateTimeInterface
    {
        return $this->shipped;
    }

    private function setDateTimeRange(DateTimeInterface $ordered, DateTimeInterface $shipped )
    {
        $this->ordered = $ordered;
        $this->shipped = $shipped;
    }

    public function getShipTo(): string
    {
        return $this->ship_to;
    }

    public function setShipTo(string $ship_to): void
    {
        $this->ship_to = $ship_to;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    public function getItems(): ArrayCollection
    {
        return $this->items;
    }


}