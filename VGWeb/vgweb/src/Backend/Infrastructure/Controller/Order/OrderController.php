<?php


namespace App\Backend\Infrastructure\Controller\Order;

use App\Backend\Application\UseCases\Order\FindAllOrders;
use App\Backend\Application\UseCases\Order\FindAOrder;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends AbstractController
{
    private FindAOrder $findAOrder;
    private FindAllOrders $findAllOrders;

    public function __construct(
        FindAOrder $findAOrder,
        FindAllOrders $findAllOrders
    ) {
        $this->findAOrder = $findAOrder;
        $this->findAllOrders = $findAllOrders;
    }

    /**
     * @Route("/api/orders/{id}", methods={"GET"})
     * @param int $id;
     * @return JsonResponse
     */
    public function show(int $id):JsonResponse
    {
        $order = $this->findAOrder->find($id);
        return new JsonResponse($order, Response::HTTP_OK);
    }

    /**
     * @Route("/api/orders", methods={"GET"})
     */
    public function list():JsonResponse
    {
        $orders = $this->findAllOrders->findAll();
        return new JsonResponse($orders, Response::HTTP_OK);
    }


}