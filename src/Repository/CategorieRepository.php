<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

 class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }
    //--=========================== Tous les categories avec les produits respectif ============================================================================
    public function findByInit($dateEnd = NULL )
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $init = "SELECT c.ordre, mvt.quantite initiale,p.nomProduit Produits,p.id ,CONCAT(c.ordre,'_', p.id ) ordreProd
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p 
        WITH p.id = mvt.produit
        WHERE mvt.id IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)      
        ORDER BY mvt.Categorie";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findByEnter($dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer, CONCAT(c.ordre,'_', p.id ) ordreProd
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=1 and mvt.dateEntrer<= '$dateEnd'
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findByOut($dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<= '$dateEnd' 
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }

    public function findByCurrent($dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $current = "SELECT c.ordre,p.nomProduit produit, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre debut,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.dateEntrer<= '$dateEnd'
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }

    //--=========================== Tous les categories pour le produits  ============================================================================

    public function findByInitPro($product_id , $dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $init = "SELECT c.ordre, mvt.quantite initiale, p.nomProduit Produits,p.id   
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p 
        WITH p.id = mvt.produit
        WHERE mvt.id IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)
        AND mvt.produit = $product_id ORDER BY mvt.Categorie";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findBytEnterPro($product_id , $dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer,CONCAT(c.ordre,'_', p.id ) ordreProd 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=1 and mvt.dateEntrer<= '$dateEnd' and mvt.produit = $product_id 
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }
    
    public function findByOutPro($product_id, $dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<= '$dateEnd' and mvt.produit = $product_id
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }
    public function findByCurrentPro($product_id,$dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $current = "SELECT c.ordre, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit and mvt.produit = $product_id
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }
   
    //--==========================Requets etat de stock mensuel ============================================================================
    public function findByInitMonth($mois ,$year,$dateEnd = NULL
    )
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $init = "SELECT c.ordre, mvt.quantite initiale,MONTH(mvt.dateEntrer) mois,CONCAT(c.ordre,'_', p.id ) ordreProd
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE MONTH(mvt.dateEntrer) <= '$mois' AND YEAR(mvt.dateEntrer) <= '$year'
        AND mvt.id IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)
        ORDER BY mvt.Categorie
        ";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findByEnterMonth($mois ,$year,$dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer, CONCAT(c.ordre,'_', p.id ) ordreProd
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=1 and MONTH(mvt.dateEntrer) = '$mois' and YEAR(mvt.dateEntrer) = '$year'
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findByOutMonth($mois ,$year,$dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and MONTH(mvt.dateEntrer) = '$mois' and YEAR(mvt.dateEntrer) = '$year'

        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }

    public function findByCurrentMonth($mois ,$year,$dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        
        $current = "SELECT c.ordre,p.nomProduit produit, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre debut,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE MONTH(mvt.dateEntrer) <= '$mois' AND YEAR(mvt.dateEntrer) <= '$year'
        --WHERE mvt.dateEntrer<= '$dateEnd'
        GROUP BY mvt.Categorie ";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }

    public function findByBeginCurrentMonth($mois ,$year,$dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        
        $current = "SELECT c.ordre,p.nomProduit produit, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale, SUM(mvt.quantite) debut,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.dateEntrer <= '$year-$mois-01' 
        --WHERE mvt.dateEntrer<= '$dateEnd'
        GROUP BY mvt.Categorie ";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }

    //--==========================Requets etat de stock annuel ============================================================================
    public function findByInitYear($annee , $dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $init = "SELECT c.ordre, mvt.quantite initiale 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie GROUP BY mvt.Categorie
        WHERE YEAR(mvt.dateEntrer) = '$annee'";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findByEnterYear($mois , $dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie WHERE mvt.types=1 and mvt.dateEntrer<= '$dateEnd'
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }
    
    public function findByOutYear( $dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<= '$dateEnd'
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }

    public function findByCurrentYear($annee,$dateEnd = NULL)
    {
        if ($dateEnd == NULL ) {
            $dateEnd = date('Y-m-d');
        }
        $current = "SELECT c.ordre, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        GROUP BY mvt.Categorie 
        WHERE YEAR(mvt.dateEntrer) = '$annee'";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }



}






























