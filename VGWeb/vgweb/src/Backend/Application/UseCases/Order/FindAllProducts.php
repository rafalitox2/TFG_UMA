<?php


namespace App\Backend\Application\UseCases\Order;


use App\Backend\Application\Dto\Response\Transform\Order\ProductResponseDtoTransformer;
use App\Backend\Application\Repository\Order\ProductRepository;

class FindAllProducts
{
    private ProductRepository $productRepository;
    private ProductResponseDtoTransformer $productResponseDtoTransformer;

    public function __construct(ProductRepository $productRepository,
                                ProductResponseDtoTransformer $productResponseDtoTransformer)
    {
        $this->productRepository = $productRepository;
        $this->productResponseDtoTransformer = $productResponseDtoTransformer;
    }

    public function findAll():array
    {
        $products = $this->productRepository->searchAll();
        return $this->productResponseDtoTransformer->transformObjects($products);
    }
}