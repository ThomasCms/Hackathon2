<?php

namespace App\Repository;

use App\Entity\RetourEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RetourEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method RetourEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method RetourEvent[]    findAll()
 * @method RetourEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RetourEventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RetourEvent::class);
    }

    // /**
    //  * @return RetourEvent[] Returns an array of RetourEvent objects
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
    public function findOneBySomeField($value): ?RetourEvent
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
