<?php

namespace App\Backend\Infrastructure\Repository\Order;

use App\Backend\Application\Repository\Order\ItemRepository;
use App\Backend\Domain\Model\Order\ItemModel;
use App\Backend\Domain\Model\Order\ProductModel;
use App\Backend\Infrastructure\Entity\Order\Item;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class DoctrineItemRepository extends ServiceEntityRepository implements ItemRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Item::class);
    }
    private function createModelClass(Item $itemInput): ItemModel{
        $item = new ItemModel(
            $itemInput->getId(),
            $itemInput->getPrice(),
            $itemInput->getQuantity()
        );
        $item ->setProduct(new ProductModel(
            $itemInput->getProduct()->getId(),
            $itemInput->getProduct()->getName(),
            $itemInput->getProduct()->getPrice(),
            $itemInput->getProduct()->getDetails()
        ));

        return $item;
    }
/*
    function search(int $id, bool $model = true)
    {
        $item = $this->find($id);
        if($model && $item){
            return $this->createModelClass($item);
        }
        return $item;
    }
*/

    function searchAll(): array
    {
        $items = $this->findAll();
        $itemsApplication = [];

        foreach ($items as $item){
            $itemsEntity = $this->createModelClass($item);
            $itemsApplication[] = $itemsEntity;
        }

        return $itemsApplication;

    }
}
