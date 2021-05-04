<?php


namespace App\Backend\Domain\Model\Order;


class ProductModel
{
    private int $id;
    private string $name;
    private int $price;
    private string $details;


    public function __construct(
        $id,
        $name,
        $price,
        $details
    ){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->details = $details;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

    public function setDetails(string $details): void
    {
        $this->details = $details;
    }


}