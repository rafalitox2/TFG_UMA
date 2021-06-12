<?php


namespace App\Backend\Application\Dto\Response\Order;


class ProductResponseDto
{
    public int $id;
    public string $name;
    public int $price;
    public string $details;

    public function __construct($id, $name, $price, $details){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->details = $details;
    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDetails():string{
        return $this->details;
    }
}