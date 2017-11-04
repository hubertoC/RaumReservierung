<?php

namespace HZ\raumReservierungBundle\Repository;

/**
 * RaumRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RaumRepository extends \Doctrine\ORM\EntityRepository
{
  public function byGebaeude($gebaeude){

     $qb = $this->createQueryBuilder('a');

                $qb
                ->innerJoin('a.gebaeude','c')
                ->addSelect('c');

                $qb->where($qb->expr()->in('c.id', $gebaeude));

            return $qb->getQuery()->getResult();
  }

public function studentRaumByGebaeude($gebaeude){
  $qb = $this->createQueryBuilder('a');
  $qb
  ->innerJoin('a.gebaeude','c')
  ->addSelect('c')
  ->andWhere($qb->expr()->in('c.id', $gebaeude))
    ->andWhere('a.frei LIKE :yes'  )
    ->setParameter('yes', 'yes');

    return $qb
      ->getQuery()
      ->getResult()
    ;
}
}
