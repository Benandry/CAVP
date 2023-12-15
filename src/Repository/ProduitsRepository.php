<?php

namespace App\Repository;
use App\Entity\Mouvement;
use App\Entity\Produits;
use App\Entity\Categorie;
use App\Entity\OrderTypes;
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
        #dd($numero);
        if ($bureau == NULL) {
            $clause =" WHERE mvt.types = 2 AND p.types = $types AND mvt.number_sortie = '$numero'";
        }else {
            $clause = " WHERE mvt.types = 2 AND a.id = $bureau AND p.types = $types AND mvt.number_sortie = '$numero'";
        }
        $rawSql = " SELECT c.ordre ordre,c.NomDeCategorie categorie,c.valeurFaciale vf ,CONCAT(c.ordre,'_', c.NomDeCategorie) nombre_cat, c.tpParPl,mvt.quantite, c.prixDeVente,
                    COUNT(a.name) nombre_agence,SUM(mvt.quantite) somme,a.name bureau, mvt.number_sortie numero, a.id idBureau
                    FROM App\Entity\Mouvement mvt 
                    LEFT JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
                    LEFT JOIN App\Entity\Produits p WITH p.id = mvt.produit
                    LEFT JOIN App\Entity\Agence a WITH a.id = mvt.Agence
                    $clause
                    GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($rawSql);
        return $stmt->execute();
    }

    public function findAgency($numero,$types,$bureau = NULL)
    {
        if ($bureau == NULL) {
            $clause =" WHERE mvt.types = 2 AND p.types = $types AND mvt.number_sortie = '$numero'";
        }else {
            $clause = " WHERE mvt.types = 2 AND a.id = $bureau AND p.types = $types AND mvt.number_sortie = '$numero'";
        }
        $rawSql = " SELECT c.tpParPl,mvt.quantite,c.ordre ordre, c.valeurFaciale vf ,mvt.quantite nombre_cat, c.prixDeVente, c.NomDeCategorie categorie,
                    COUNT(a.name) nombre_agence,SUM(mvt.quantite) somme,a.name bureau, mvt.number_sortie numero, a.id idBureau
                    FROM App\Entity\Mouvement mvt 
                    LEFT JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
                    LEFT JOIN App\Entity\Produits p WITH p.id = mvt.produit
                    LEFT JOIN App\Entity\Agence a WITH a.id = mvt.Agence
                    $clause
                    GROUP BY mvt.Agence";

        $stmt = $this->getEntityManager()->createQuery($rawSql);
        return $stmt->execute();
    }
    
    public function findByNumeroProduct($types)
    {
        $rawSql = " SELECT mvt.number_sortie numero, t.id types 
                    FROM App\Entity\Produits p 
                    INNER JOIN App\Entity\OrderTypes t With t.id = p.types
                    INNER JOIN App\Entity\Mouvement mvt WITH mvt.produit = p.id 
                    WHERE mvt.types = 2 AND t.id = $types
                    GROUP BY mvt.number_sortie";
        $stmt = $this->getEntityManager()->createQuery($rawSql);
        return $stmt->execute();
    }

    public function findProducts()
    {dd($this->createQueryBuilder('p')
        ->select(['p.id'])
        // ->join(OrderTypes::class, 't')
        // ->where('t.id = p.types')
        // ->orderBy('p.id','DESC')
        ->getQuery()
        ->getResult());
    }
}