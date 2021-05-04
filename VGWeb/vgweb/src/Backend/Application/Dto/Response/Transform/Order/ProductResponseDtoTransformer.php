<?php

namespace App\Backend\Application\Dto\Response\Transform\Order;

use App\Backend\Application\Dto\Response\Order\ProductResponseDto;
use App\Backend\Application\Dto\Response\Transform\AbstractResponseDtoTransformer;

class ProductResponseDtoTransformer extends AbstractResponseDtoTransformer
{
    public function transformObject($product):ProductResponseDto
    {
        return new ProductResponseDto($product->getId(),$product->getName(),$product->getPrice(),$product->getDetails());
    }
}