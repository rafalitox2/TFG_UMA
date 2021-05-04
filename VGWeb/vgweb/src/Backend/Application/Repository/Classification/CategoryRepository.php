<?php


namespace App\Backend\Application\Repository\Classification;


interface CategoryRepository
{

    function search(int $id, bool $model=true);
    function searchAll(): array;
    function searchProducts(int $id): array;
}