<?php


namespace App\Backend\Application\Dto\Response\Order;


class OrderResponseDto
{
    public int $id;
    //private UserModel $user;
    public string $ordered;
    public string  $shipped;
    public string $ship_to;
    public int $total;


    public function __construct(int $id, string $ordered, string $shipped, string $ship_to, int $total)
    {
        $this->id = $id;
        $this->ordered = $ordered;
        $this->shipped = $shipped;
        $this->ship_to = $ship_to;
        $this->total = $total;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOrdered(): string
    {
        return $this->ordered;
    }

    public function getShipped(): string
    {
        return $this->shipped;
    }

    public function getShipTo(): string
    {
        return $this->ship_to;
    }

    public function getTotal(): int
    {
        return $this->total;
    }



}