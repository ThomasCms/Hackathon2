<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 21/12/18
 * Time: 01:48
 */

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class AnnualResult extends ServiceEntityRepository
{
    public function getJanvierResult(RetourEventRepository $retourEventRepository): int
    {
        $qb = $this->createQueryBuilder('re')
            ->where('re.date_evenement BETWEEN \'2019-04-01\' AND \'2019-04-31 23:59:59\'')
            ->getQuery();

        return $qb->execute();
    }
}
