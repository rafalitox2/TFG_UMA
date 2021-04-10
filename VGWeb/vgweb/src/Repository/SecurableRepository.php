<?php

namespace App\Repository;

use App\Entity\Securable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Securable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Securable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Securable[]    findAll()
 * @method Securable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecurableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Securable::class);
    }

    // /**
    //  * @return Securable[] Returns an array of Securable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Securable
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
