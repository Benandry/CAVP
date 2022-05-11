<?php

namespace App\Repository;

use App\Entity\ProduitDispo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProduitDispo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProduitDispo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProduitDispo[]    findAll()
 * @method ProduitDispo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitDispoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduitDispo::class);
    }

    // /**
    //  * @return ProduitDispo[] Returns an array of ProduitDispo objects
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
    public function findOneBySomeField($value): ?ProduitDispo
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
