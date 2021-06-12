<?php


namespace App\Backend\Application\UseCases\Order;


use App\Backend\Application\Dto\Response\Order\OrderResponseDto;
use App\Backend\Application\Dto\Response\Transform\Order\OrderResponseDtoTransformer;
use App\Backend\Application\Repository\Order\OrderRepository;

class FindAOrder
{
    private OrderRepository $orderRepository;
    private OrderResponseDtoTransformer $orderResponseDtoTransformer;

    public function __construct(OrderRepository $orderRepository,
                                OrderResponseDtoTransformer $orderResponseDtoTransformer)
    {
        $this->orderRepository = $orderRepository;
        $this->orderResponseDtoTransformer = $orderResponseDtoTransformer;
    }

    public function find(int $id): OrderResponseDto
    {
        $order = $this->orderRepository->search($id);
        /*if(!$item){
            throw new ItemNotFound("This item was not found.");
        }*/
        return $this->orderResponseDtoTransformer->transformObject($order);
    }
}