<?php


namespace App\Backend\Application\UseCases\Order;


use App\Backend\Application\Dto\Response\Transform\Order\ItemResponseDtoTransformer;
use App\Backend\Application\Repository\Order\ItemRepository;

class FindAllItem
{
    private ItemRepository $itemRepository;
    private ItemResponseDtoTransformer $itemResponseDtoTransformer;

    public function __construct(ItemRepository $itemRepository,
                                ItemResponseDtoTransformer $itemResponseDtoTransformer)
    {
        $this->itemRepository = $itemRepository;
        $this->itemResponseDtoTransformer = $itemResponseDtoTransformer;
    }

    public function findAll(): array
    {
        $items = $this->itemRepository->searchAll();
        return $this->itemResponseDtoTransformer->transformObjects($items);
    }
}