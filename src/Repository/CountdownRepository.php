<?php

namespace App\Repository;

use App\Entity\CountDown;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CountDown|null find($id, $lockMode = null, $lockVersion = null)
 * @method CountDown|null findOneBy(array $criteria, array $orderBy = null)
 * @method CountDown[]    findAll()
 * @method CountDown[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountDownRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CountDown::class);
    }

    // /**
    //  * @return CountDown[] Returns an array of CountDown objects
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
    public function findOneBySomeField($value): ?CountDown
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
