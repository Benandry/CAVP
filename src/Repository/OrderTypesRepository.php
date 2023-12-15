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
   
    public function findTypeOrders() : array
    {
        return $this->createQueryBuilder('o')
            ->select(['o.id','o.type_order_short','o.type_order_long','o.other_type'])
            ->orderBy('o.id','DESC')
            ->getQuery()
            ->getResult()
        ;
    }

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
