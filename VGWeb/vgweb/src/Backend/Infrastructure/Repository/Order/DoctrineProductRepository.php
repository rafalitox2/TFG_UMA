<?php

namespace App\Backend\Infrastructure\Repository\Order;

use App\Backend\Application\Repository\Order\ProductRepository;
use App\Backend\Domain\Model\Order\ProductModel;
use App\Backend\Infrastructure\Entity\Order\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineProductRepository extends ServiceEntityRepository implements ProductRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    private function createModelClass(Product $product): ProductModel{
        return new ProductModel(
            $product->getId(),
            $product->getName(),
            $product->getPrice(),
            $product->getDetails()
        );
    }

    function search(int $id, bool $model = true)
    {
        $product = $this->find($id);
        if($model && $product){
            return $this->createModelClass($product);
        }
        return $product;
    }

    function searchAll(): array
    {
        $products = $this->findAll();
        $productApplication = [];
        foreach ($products as $product){
            $productsEntity = $this->createModelClass($product);
            $productApplication[] = $productsEntity;
        }
        return $productApplication;
    }
}
