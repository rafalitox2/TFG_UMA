<?php


namespace App\Backend\Application\Repository\Order;


interface OrderRepository
{
    function search(int $id, bool $model=true);
    function searchAll(): array;
    //function searchByUser(int $userId):array;
}