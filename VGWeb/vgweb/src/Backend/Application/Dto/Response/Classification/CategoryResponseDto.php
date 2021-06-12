<?php


namespace App\Backend\Application\Dto\Response\Classification;


class CategoryResponseDto
{
    public int $id;
    public string $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }
}