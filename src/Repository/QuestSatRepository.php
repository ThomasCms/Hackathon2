<?php

namespace App\Repository;

use App\Entity\QuestSat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestSat|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestSat|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestSat[]    findAll()
 * @method QuestSat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestSatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuestSat::class);
    }

    // /**
    //  * @return QuestSat[] Returns an array of QuestSat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestSat
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
