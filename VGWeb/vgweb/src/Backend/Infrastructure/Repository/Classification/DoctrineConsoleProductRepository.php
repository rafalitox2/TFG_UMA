<?php

namespace App\Backend\Infrastructure\Repository\Classification;

use App\Entity\ConsoleProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class DoctrineConsoleProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsoleProduct::class);
    }


}
