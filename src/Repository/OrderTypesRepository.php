<?php

namespace App\Repository;

use App\Entity\OrderTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderTypes[]    findAll()
 * @method OrderTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderTypes::class);
    }

    // /**
    //  * @return OrderTypes[] Returns an array of OrderTypes objects
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
    public function findOneBySomeField($value): ?OrderTypes
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
