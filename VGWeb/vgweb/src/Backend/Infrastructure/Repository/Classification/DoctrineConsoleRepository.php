<?php

namespace App\Backend\Infrastructure\Repository\Classification;

use App\Backend\Application\Repository\Classification\ConsoleRepository;
use App\Backend\Domain\Model\Classification\ConsoleModel;
use App\Backend\Domain\Model\Order\ProductModel;
use App\Backend\Infrastructure\Entity\Classification\Console;
use App\Backend\Infrastructure\Entity\Order\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class DoctrineConsoleRepository extends ServiceEntityRepository implements ConsoleRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Console::class);
    }
    private function createModelClass(Console $console): ConsoleModel{
        return new ConsoleModel(
            $console->getId(),
            $console->getName()
        );
    }

    function search(int $id, bool $model = true)
    {
        $console = $this->find($id);
        if($model && $console){
            return $this->createModelClass($console);
        }
        return $console;
    }

    function searchAll(): array
    {
        $consoles = $this->findAll();
        $consoleApplication = [];
        foreach ($consoles as $console){
            $categoriesEntity = $this->createModelClass($console);
            $categoryApplication[] = $categoriesEntity;
        }
        return $consoleApplication;
    }

    function searchProducts(int $id): array
    {
        $console = $this->find($id);
        $consoleProducts = $console->getConsoleProduct();
        $productsModel = [];
        foreach ($consoleProducts as $consoleProduct) {
            $product = $consoleProduct->getProduct();
            $productModel = $this->createProductModelClass($product);
            if(!in_array($productModel,$productsModel)){
                $productsModel[] = $productModel;
            }
        }
        return $productsModel;
    }

    private function createProductModelClass(Product $product): productModel
    {
        $productModel = new ProductModel(
            $product->getId(),
            $product->getName(),
            $product->getPrice(),
            $product->getDetails()
        );
        $productModel->setId($product->getId());
        return $productModel;
    }
}
