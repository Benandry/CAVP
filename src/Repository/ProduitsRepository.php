<?php

namespace App\Repository;
use App\Entity\Mouvement;
use App\Entity\Produits;
use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produits[]    findAll()
 * @method Produits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produits::class);
    }
 
public function findByOrder()
    {
        $rawSql = "SELECT c.NomDeCategorie categorie , c.valeurFaciale vf ,SUM(mvt.quantite) FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie GROUP BY mvt.produit";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }

}


