<?php

namespace App\Backend\Application\Dto\Response\Transform;

abstract class AbstractResponseDtoTransformer implements ResponseDtoTransformer
{
    public function transformObjects(array $objects): array
    {
        $dto = [];
        foreach ($objects as $object) {
            $dto[] = $this->transformObject($object);
        }

        return $dto;
    }
}