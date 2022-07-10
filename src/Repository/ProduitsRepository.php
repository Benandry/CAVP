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
    public function findByOrder($types,$numero,$bureau = NULL)
    {
        if ($bureau == NULL) {
            $clause =" WHERE mvt.types = 2 AND p.types = ".$types." AND mvt.numero_de_sortie = ".$numero;
        }else {
            $clause = "WHERE mvt.types = 2 AND a.id = ".$bureau." AND p.types = ".$types." AND mvt.numero_de_sortie = ".$numero;
        }
        $rawSql = " SELECT c.tpParPl,mvt.quantite,c.ordre ordre, c.valeurFaciale vf ,mvt.quantite nombre_cat, c.prixDeVente, c.NomDeCategorie categorie,
                    COUNT(a.name) nombre_agence,SUM(mvt.quantite) somme,a.name bureau, n.numero_de_sortie numero, a.id idBureau,
                    n.id numeroSortie
                    FROM App\Entity\Mouvement mvt 
                    INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
                    INNER JOIN App\Entity\Produits p WITH p.id = mvt.produit
                    INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
                    INNER JOIN App\Entity\OrderSortie n WITH n.id = mvt.numero_de_sortie
                    $clause
                    GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($rawSql);
        return $stmt->execute();
    }

    public function findAgency($numero = NULL,$types)
    {
    
        $rawSql = " SELECT COUNT(a.name) nombre_agence FROM App\Entity\Mouvement mvt 
                    INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
                    WHERE mvt.types = 2 AND mvt.numero_de_sortie = $numero AND mvt.numero_de_sortie = $types
                    GROUP BY mvt.Agence";

        $stmt = $this->getEntityManager()->createQuery($rawSql);
        return $stmt->execute();
    }
    
    public function findByNumeroProduct($types)
    {
        $rawSql = " SELECT DISTINCT t.id types_product ,o.numero_de_sortie numero,o.id types
                    FROM App\Entity\Produits p 
                    INNER JOIN App\Entity\OrderTypes t With t.id = p.types
                    INNER JOIN App\Entity\Mouvement mvt WITH mvt.produit = p.id 
                    LEFT JOIN App\Entity\OrderSortie o WITH mvt.numero_de_sortie = o.id 
                    WHERE mvt.types = 2 AND t.id = $types ";
        $stmt = $this->getEntityManager()->createQuery($rawSql);
        return $stmt->execute();
    }
}