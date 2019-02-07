<?php

namespace App\Repository;

use App\Entity\CustomEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomEvent[]    findAll()
 * @method CustomEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomEventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomEvent::class);
    }

    // /**
    //  * @return CustomEvent[] Returns an array of CustomEvent objects
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
    public function findOneBySomeField($value): ?CustomEvent
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
