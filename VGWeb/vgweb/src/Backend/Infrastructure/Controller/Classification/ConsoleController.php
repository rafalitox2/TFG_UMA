<?php


namespace App\Backend\Infrastructure\Controller\Classification;


use App\Backend\Application\UseCases\Classification\FindAllConsoles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsoleController extends AbstractController
{
    private FindAllConsoles $findAllConsoles;

    public function __construct(FindAllConsoles $findAllConsoles)
    {
        $this->findAllConsoles = $findAllConsoles;
    }
    /**
     * @Route("/api/consoles", methods={"GET"})
     */
    public function list():JsonResponse
    {
        $consoles = $this->findAllConsoles->findAll();
        return new JsonResponse($consoles, Response::HTTP_OK);
    }
}