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
    public function findByInit()
    {
        $init = "SELECT c.ordre, mvt.quantite initiale 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie
        WHERE mvt.id IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)      
        ORDER BY mvt.Categorie";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findByEnter()
    {
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie WHERE mvt.types=1 and mvt.dateEntrer<='2999-00-00'
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findByOut()
    {
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<='2999-00-00' 
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }

    public function findByCurrent()
    {
        $current = "SELECT c.ordre,p.nomProduit produit, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }

    //--=========================== Tous les categories pour le produits  ============================================================================

    public function findByInitPro($product_id)
    {
        $init = "SELECT c.ordre, mvt.quantite initiale, p.nomProduit Produits,p.id   
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p 
        WITH p.id = mvt.produit
        WHERE mvt.produit = $product_id GROUP BY mvt.Categorie";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findBytEnterPro($product_id)
    {
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie WHERE mvt.types=1 and mvt.dateEntrer<='2999-00-00'and mvt.produit = $product_id 
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findByOutPro($product_id)
    {
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<='2999-00-00' and mvt.produit = $product_id
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }
    public function findByCurrentPro($product_id)
    {
        $current = "SELECT c.ordre, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit and mvt.produit = $product_id
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }
    //--======================================= Requets impression de fichier================================================================

    public function findInitiale($product_id)
    {
        $init = "SELECT c.ordre, mvt.quantite initiale, p.nomProduit Produits 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p 
        WITH p.id = mvt.produit
        WHERE mvt.produit = $product_id GROUP BY mvt.Categorie";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findEntrer($product_id)
    {
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie WHERE mvt.types=1 and mvt.dateEntrer<='2999-00-00'and mvt.produit = $product_id 
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findBySortie($product_id)
    {
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<='2999-00-00' and mvt.produit = $product_id
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }
    public function findByCourant($product_id)
    {
        $current = "SELECT c.ordre, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit and mvt.produit = $product_id
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }
    //--==========================Requets etat de stock mensuel ============================================================================
    public function findByInitMonth($mois)
    {
        $init = "SELECT c.ordre, mvt.quantite initiale,MONTH(mvt.dateEntrer) mois 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie
        WHERE MONTH(mvt.dateEntrer) = '$mois'
        GROUP BY mvt.Categorie
        ";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }

    public function findByEnterMonth($mois)
    {
        $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer 
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie WHERE mvt.types=1 and mvt.dateEntrer<='2999-00-00' 
        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findByOutMonth($mois)
    {
        $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie  
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types=2 and mvt.dateEntrer<='2999-00-00'

        GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($out);

        return $stmt->execute();
    }

    public function findByCurrentMonth($mois)
    {
        $current = "SELECT c.ordre, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
        FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE MONTH(mvt.dateEntrer) = '$mois'
        GROUP BY mvt.Categorie ";
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }

        //--==========================Requets etat de stock annuel ============================================================================
        public function findByInitYear($annee)
        {
            $init = "SELECT c.ordre, mvt.quantite initiale 
            FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
            WITH c.id = mvt.Categorie GROUP BY mvt.Categorie
            WHERE YEAR(mvt.dateEntrer) = '$annee'";
    
            $stmt = $this->getEntityManager()->createQuery($init);
    
            return $stmt->execute();
        }
    
        public function findByEnterYear($mois)
        {
            $enter = "SELECT c.ordre,  SUM(mvt.quantite) entrer 
            FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
            WITH c.id = mvt.Categorie WHERE mvt.types=1 and mvt.dateEntrer<='2999-00-00'
            GROUP BY mvt.Categorie";
            $stmt = $this->getEntityManager()->createQuery($enter);
    
            return $stmt->execute();
        }
    
        public function findByOutYear()
        {
            $out = "SELECT  c.ordre,p.id produit , CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(mvt.quantite) sortie 
            FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
            WITH c.id = mvt.Categorie  
            INNER JOIN App\Entity\Produits p WITH p.id = c.produit
            WHERE mvt.types=2 and mvt.dateEntrer<='2999-00-00' 
            GROUP BY mvt.Categorie";
            $stmt = $this->getEntityManager()->createQuery($out);
    
            return $stmt->execute();
        }
    
        public function findByCurrentYear($annee)
        {
            $current = "SELECT c.ordre, c.NomDeCategorie,p.id produit_id, CONCAT(c.ordre,'_', p.id ) ordreProd,c.valeurFaciale,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(mvt.quantite) actuelle 
            FROM App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie INNER JOIN App\Entity\Produits p WITH p.id = c.produit
            GROUP BY mvt.Categorie 
            WHERE YEAR(mvt.dateEntrer) = '$annee'";
            $stmt = $this->getEntityManager()->createQuery($current);
    
            return $stmt->execute();
        }



}






























