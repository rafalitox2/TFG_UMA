<?php


namespace App\Backend\Application\Repository\Order;


interface ProductRepository
{

    function search(int $id, bool $model=true);
    function searchAll(): array;
    //function searchOrder(int $id): array;
}