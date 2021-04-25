<?php

namespace App\Repository;

use App\Entity\RolSecurable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RolSecurable|null find($id, $lockMode = null, $lockVersion = null)
 * @method RolSecurable|null findOneBy(array $criteria, array $orderBy = null)
 * @method RolSecurable[]    findAll()
 * @method RolSecurable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RolSecurableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RolSecurable::class);
    }

    // /**
    //  * @return RolSecurable[] Returns an array of RolSecurable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RolSecurable
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
