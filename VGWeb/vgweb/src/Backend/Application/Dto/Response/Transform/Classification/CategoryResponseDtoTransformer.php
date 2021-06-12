<?php


namespace App\Backend\Application\Dto\Response\Transform\Classification;


use App\Backend\Application\Dto\Response\Classification\CategoryResponseDto;
use App\Backend\Application\Dto\Response\Transform\AbstractResponseDtoTransformer;

class CategoryResponseDtoTransformer extends AbstractResponseDtoTransformer
{

    function transformObject(object $category): CategoryResponseDto
    {
        return new CategoryResponseDto($category->getId(),$category->getName());
    }
}