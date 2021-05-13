<?php


namespace App\Backend\Domain\Model\Classification;


use Doctrine\Common\Collections\ArrayCollection;

class ConsoleModel
{
    private int $id;
    private string $name;
    private $products;

    public function __construct(
        int $id,
        string $name
    ){
        $this->products = new ArrayCollection();
        $this->id = $id;
        $this->name = $name;
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

    public function getProducts(): ArrayCollection
    {
        return $this->products;
    }
}