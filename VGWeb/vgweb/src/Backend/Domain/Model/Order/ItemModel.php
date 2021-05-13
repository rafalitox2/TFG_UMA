<?php declare(strict_types=1);


namespace App\Backend\Domain\Model\Order;

use App\Backend\Domain\Model\Order\ProductModel;

class ItemModel
{
    private int $id;
    private ProductModel $product;
    private int $quantity;
    private int $price;

    public function __construct(int $id, int $quantity, int $price)
    {
        $this->setId($id);
        $this->setQuantity($quantity);
        $this->setPrice($price);
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

    public function getProduct(): ProductModel
    {
        return $this->product;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setProduct(ProductModel $product): void
    {
        $this->product = $product;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }


}