<?php


namespace App\Backend\Application\Dto\Response\Transform;


interface ResponseDtoTransformer
{
    function transformObject(object $object): object;

    function transformObjects(array $objects): array;
}