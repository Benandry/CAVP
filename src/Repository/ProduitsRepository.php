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
 
public function findByOrder($types)
    {
        $rawSql = " SELECT c.nombre_planche,c.ordre ordre,c.prixDeVente, c.NomDeCategorie categorie,COUNT(a.name) nombre_agence, c.valeurFaciale vf ,SUM(mvt.quantite) somme ,mvt.quantite nombre_cat,a.name bureau FROM App\Entity\Mouvement mvt 
                    INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
                    INNER JOIN App\Entity\Produits p WITH p.id = mvt.produit
                    INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
                    WHERE mvt.types = $types and mvt
                    GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
            
     }
}


