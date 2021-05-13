<?php


namespace App\Backend\Infrastructure\Controller\Classification;
use App\Backend\Application\UseCases\Classification\FindAllCategories;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    private FindAllCategories $findAllCategories;

    public function __construct(FindAllCategories $findAllCategories)
    {
        $this->findAllCategories = $findAllCategories;
    }
    /**
     * @Route("/api/categories", methods={"GET"})
     */
    public function list():JsonResponse
    {
        $categories = $this->findAllCategories->findAll();
        return new JsonResponse($categories, Response::HTTP_OK);
    }
}