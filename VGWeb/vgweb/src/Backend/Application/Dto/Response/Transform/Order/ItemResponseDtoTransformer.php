<?php


namespace App\Backend\Application\Dto\Response\Transform\Order;

use App\Backend\Application\Dto\Response\Order\ItemResponseDto;
use App\Backend\Application\Dto\Response\Transform\AbstractResponseDtoTransformer;

class ItemResponseDtoTransformer extends AbstractResponseDtoTransformer
{
    public function transformObject($item):ItemResponseDto
    {
        return new ItemResponseDto($item->getId(),$item->getQuantity(),$item->getPrice());
    }
}