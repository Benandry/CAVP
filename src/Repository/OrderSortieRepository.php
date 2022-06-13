<?php

namespace App\Repository;

use App\Entity\OrderSortie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderSortie|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderSortie|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderSortie[]    findAll()
 * @method OrderSortie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderSortieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderSortie::class);
    }

    // /**
    //  * @return OrderSortie[] Returns an array of OrderSortie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderSortie
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
