<?php


namespace App\Backend\Application\Dto\Response\Transform\Order;

use App\Backend\Application\Dto\Response\Order\OrderResponseDto;
use App\Backend\Application\Dto\Response\Transform\AbstractResponseDtoTransformer;

class OrderResponseDtoTransformer extends AbstractResponseDtoTransformer
{
    public function transformObject($order):OrderResponseDto
    {
       $id = $order->getId();
       $ordered = $order->getOrdered()->format('d-m-Y');
       $shipped = $order->getShipped()->format('d-m-Y');
       $ship_to = $order->getShipTo();
       $total = $order->getTotal();

        return new OrderResponseDto($id, $ordered, $shipped, $ship_to, $total);
    }

}