<?php

namespace App\Repository;

use App\Entity\PhotoCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PhotoCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoCollection[]    findAll()
 * @method PhotoCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoCollectionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PhotoCollection::class);
    }

    // /**
    //  * @return PhotoCollection[] Returns an array of PhotoCollection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhotoCollection
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
