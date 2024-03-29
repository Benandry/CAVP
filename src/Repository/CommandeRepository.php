<?php

namespace App\Repository;

use App\Entity\Descriptions;
use App\Entity\Commande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commande[]    findAll()
 * @method Commande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    
    public function findByDescription($types)
    {
        
        $rawSql = "SELECT d.information descriptions, t.name,d.id
            FROM  App\Entity\Descriptions d 
            INNER JOIN App\Entity\Types t WITH t.id = d.types 
            WHERE d.types = $types";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }
    

    /*
    public function findOneBySomeField($value): ?Commande
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
