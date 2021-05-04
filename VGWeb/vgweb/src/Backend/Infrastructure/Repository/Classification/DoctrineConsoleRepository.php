<?php

namespace App\Backend\Infrastructure\Repository\Classification;

use App\Entity\Console;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class DoctrineConsoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Console::class);
    }

}
