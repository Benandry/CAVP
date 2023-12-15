<?php

namespace App\Repository;

use App\Entity\Agence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Agence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Agence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Agence[]    findAll()
 * @method Agence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agence::class);
    }


    public function findByAgences()
    {
        return $this->createQueryBuilder('a')
            ->select(["a.id","a.name","a.code","a.classe","a.annuaire"])
            ->orderBy('a.id','DESC')
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Agence
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
