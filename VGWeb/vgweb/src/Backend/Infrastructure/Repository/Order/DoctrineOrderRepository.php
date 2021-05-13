<?php

namespace App\Backend\Infrastructure\Repository\Order;

use App\Backend\Application\Repository\Order\OrderRepository;
use App\Backend\Domain\Model\Order\ItemModel;
use App\Backend\Domain\Model\Order\OrderModel;
use App\Backend\Infrastructure\Entity\Order\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class DoctrineOrderRepository extends ServiceEntityRepository implements OrderRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    private function createModelClass(Order $orderInput): OrderModel
    {
        $order = new OrderModel(
            $orderInput->getId(),
            $orderInput->getOrdered(),
            $orderInput->getShipped(),
            $orderInput->getShipTo(),
            $orderInput->getTotal()
        );

        return $order;
    }

    function search(int $id, bool $model = true)
    {
        $order = $this->find($id);
        if ($model && $order) {
            return $this->createModelClass($order);
        }
        return $order;
    }

    function searchAll(): array
    {
        $orders = $this->findAll();
        $orderApplication = [];
        foreach ($orders as $order) {
            $ordersEntity = $this->createModelClass($order);
            $orderApplication[] = $ordersEntity;
        }
        return $orderApplication;
    }
}
