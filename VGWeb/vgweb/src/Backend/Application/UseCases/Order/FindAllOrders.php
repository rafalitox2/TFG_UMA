<?php


namespace App\Backend\Application\UseCases\Order;


use App\Backend\Application\Dto\Response\Transform\Order\OrderResponseDtoTransformer;
use App\Backend\Application\Repository\Order\OrderRepository;

class FindAllOrders
{
    private OrderRepository $orderRepository;
    private OrderResponseDtoTransformer $orderResponseDtoTransformer;

    public function __construct(OrderRepository $orderRepository,
                                OrderResponseDtoTransformer $orderResponseDtoTransformer)
    {
        $this->orderRepository = $orderRepository;
        $this->orderResponseDtoTransformer = $orderResponseDtoTransformer;
    }


    public function findAll(): array
    {
        $products = $this->orderRepository->searchAll();
        return $this->orderResponseDtoTransformer->transformObjects($products);
    }
}