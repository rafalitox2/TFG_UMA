<?php


namespace App\Backend\Application\UseCases\Classification;

use App\Backend\Application\Dto\Response\Transform\Classification\CategoryResponseDtoTransformer;
use App\Backend\Application\Repository\Classification\CategoryRepository;

class FindAllCategories
{
    private CategoryRepository $categoryRepository;
    private CategoryResponseDtoTransformer $categoryResponseDtoTransformer;

    public function __construct(CategoryRepository $categoryRepository,
                                CategoryResponseDtoTransformer $categoryResponseDtoTransformer)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categoryResponseDtoTransformer = $categoryResponseDtoTransformer;
    }

    public function findAll():array
    {
        $categories = $this->categoryRepository->searchAll();
        return $this->categoryResponseDtoTransformer->transformObjects($categories);
    }

}