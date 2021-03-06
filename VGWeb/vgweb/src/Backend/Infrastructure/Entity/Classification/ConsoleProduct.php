<?php

namespace App\Backend\Infrastructure\Entity\Classification;

use App\Backend\Infrastructure\Entity\Order\Product;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConsoleProductRepository::class)
 */
class ConsoleProduct
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity=Console::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $console_id;


    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $product_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsoleId(): ?int
    {
        return $this->console_id;
    }

    public function setConsoleId(int $console_id): self
    {
        $this->console_id = $console_id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }
}
