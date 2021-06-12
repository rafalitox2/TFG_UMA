<?php


namespace App\Backend\Infrastructure\Controller\Order;


use App\Backend\Application\UseCases\Order\FindAllItem;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ItemController extends AbstractController
{
    private FindAllItem $findAllItem;

    public function __construct(
        FindAllItem $findAllItem
    )
    {
        $this->findAllItem = $findAllItem;
    }

    /**
     * @Route("/api/items", methods={"GET"})
     */
    public function list():JsonResponse
    {
        $items = $this->findAllItem->findAll();
        return new JsonResponse($items, Response::HTTP_OK);
    }
}