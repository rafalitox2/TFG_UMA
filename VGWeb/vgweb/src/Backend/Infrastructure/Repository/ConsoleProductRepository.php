<?php

namespace App\Backend\Infrastructure\Repository;

use App\Entity\ConsoleProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConsoleProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConsoleProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConsoleProduct[]    findAll()
 * @method ConsoleProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsoleProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsoleProduct::class);
    }

    // /**
    //  * @return ConsoleProduct[] Returns an array of ConsoleProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConsoleProduct
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
