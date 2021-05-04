<?php


namespace App\Backend\Infrastructure\Controller\Order;

use App\Backend\Application\UseCases\Order\FindAllProducts;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    private FindAllProducts $allProducts;

    public function __construct(
        FindAllProducts $allProducts
    ) {
        $this->allProducts = $allProducts;
    }

    /**
     * @Route("/api/productos", methods={"GET"})
     */
    public function list():JsonResponse
    {
        $products = $this->allProducts->findAll();
        return new JsonResponse($products, Response::HTTP_OK);
    }
}