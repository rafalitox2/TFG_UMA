<?php

namespace App\Backend\Infrastructure\Repository\Classification;

use App\Backend\Application\Repository\Classification\CategoryRepository;
use App\Backend\Domain\Model\Order\ProductModel;
use App\Backend\Infrastructure\Entity\Order\Product;
use App\Backend\Domain\Model\Classification\CategoryModel;
use App\Backend\Infrastructure\Entity\Classification\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineCategoryRepository extends ServiceEntityRepository implements CategoryRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    private function createModelClass(Category $category): CategoryModel{
        return new CategoryModel(
            $category->getId(),
            $category->getName()
        );
    }

    function search(int $id, bool $model = true)
    {
        $category = $this->find($id);
        if($model && $category){
            return $this->createModelClass($category);
        }
        return $category;
    }

    function searchAll(): array
    {
        $categories = $this->findAll();
        $categoryApplication = [];
        foreach ($categories as $category){
            $categoriesEntity = $this->createModelClass($category);
            $categoryApplication[] = $categoriesEntity;
        }
        return $categoryApplication;
    }

    function searchProducts(int $id): array
    {
        $category = $this->find($id);
        $categoryProducts = $category->getCategoryProduct();
        $productsModel = [];
        foreach ($categoryProducts as $categoryProduct) {
            $product = $categoryProduct->getProduct();
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
