<?php

namespace App\Backend\Infrastructure\Entity\Order;
use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
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
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class)
     * @ORM\Column(type="integer",nullable=true)
     */
    private $item_order;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     */
    private $item_product;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getItemOrder(): ?Order
    {
        return $this->item_order;
    }

    public function setItemOrder(?Order $item_order): self
    {
        $this->item_order = $item_order;

        return $this;
    }

    public function getItemShoppingcart(): ?ShoppingCart
    {
        return $this->item_shoppingcart;
    }

    public function setItemShoppingcart(?ShoppingCart $item_shoppingcart): self
    {
        $this->item_shoppingcart = $item_shoppingcart;

        return $this;
    }

    public function getItemProduct(): ?Product
    {
        return $this->item_product;
    }

    public function setItemProduct(?Product $item_product): self
    {
        $this->item_product = $item_product;
    }
}
