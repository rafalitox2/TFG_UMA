<?php


namespace App\Backend\Application\Dto\Response\Transform\Classification;


use App\Backend\Application\Dto\Response\Classification\ConsoleResponseDto;
use App\Backend\Application\Dto\Response\Transform\AbstractResponseDtoTransformer;

class ConsoleResponseDtoTransformer extends AbstractResponseDtoTransformer
{

    function transformObject(object $console): ConsoleResponseDto
    {
        return new ConsoleResponseDto($console->getId(),$console->getName());
    }
}