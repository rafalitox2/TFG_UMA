<?php


namespace App\Backend\Application\Dto\Response\Order;


class ItemResponseDto
{
    public int $id;
    public int $quantity;
    public int $price;

    public function __construct(int $id, int $quantity, int $price)
    {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


}