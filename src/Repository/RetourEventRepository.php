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


    public function countNumberPresentsByMonth(Month $month)
    {
        return $this->createQueryBuilder('bm')
            ->andWhere('fc.category = :category')
            ->setParameter('category', $category)
            ->select('SUM(bm.presents_evenement) as fortunesPrinted')


            ->getQuery()
            ->getOneOrNullResult();
    }
}
