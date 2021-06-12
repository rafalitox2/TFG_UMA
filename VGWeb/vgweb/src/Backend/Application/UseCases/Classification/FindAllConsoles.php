<?php


namespace App\Backend\Application\UseCases\Classification;


use App\Backend\Application\Dto\Response\Transform\Classification\ConsoleResponseDtoTransformer;
use App\Backend\Application\Repository\Classification\ConsoleRepository;

class FindAllConsoles
{
    private ConsoleRepository $consoleRepository;
    private ConsoleResponseDtoTransformer $consoleResponseDtoTransformer;

    public function __construct(ConsoleRepository $consoleRepository,
                                ConsoleResponseDtoTransformer $consoleResponseDtoTransformer)
    {
        $this->consoleRepository = $consoleRepository;
        $this->consoleResponseDtoTransformer = $consoleResponseDtoTransformer;
    }

    public function findAll():array
    {
        $consoles = $this->consoleRepository->searchAll();
        return $this->consoleResponseDtoTransformer->transformObjects($consoles);
    }
}