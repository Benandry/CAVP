<?php

namespace App\Repository;

use App\Entity\Types;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Types|null find($id, $lockMode = null, $lockVersion = null)
 * @method Types|null findOneBy(array $criteria, array $orderBy = null)
 * @method Types[]    findAll()
 * @method Types[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Types::class);
    }

    public function findByInit()
    {
       $init = "SELECT c.ordre,SUM(mvt.quantite) initiale,p.nomProduit Produits,p.id ,SUM(c.prixDeVente) prix_unitaire, CONCAT(c.ordre,'_', p.id ) ordreProd, SUM(mvt.quantite*c.prixDeVente) prix_net
        FROM  App\Entity\Mouvement mvt 
        INNER JOIN App\Entity\Produits p WITH p.id = mvt.produit
        INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
        WHERE mvt.id IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)      
        GROUP BY mvt.produit";

        $stmt = $this->getEntityManager()->createQuery($init);

        return $stmt->execute();
    }
    

    public function findByCurrent($dateEnd = NULL)
    {               
        $current = "SELECT p.nomProduit, c.NomDeCategorie quantite_init, c.ordre valeur_init,c.ordre qunad_recus,
         c.ordre val_recus, p.id quantite_sortie,c.id val_sortie, SUM(mvt.quantite) quantite_actuelle,c.ordre value_actuelle,
         CONCAT(c.ordre,'_', p.id ) ordreProd,c.ordre initiale,c.ordre entrer, c.ordre sortie, SUM(c.prixDeVente),SUM(c.prixDeVente*mvt.quantite) prix_net 
        FROM App\Entity\Categorie c 
        INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        GROUP BY mvt.produit";  
        $stmt = $this->getEntityManager()->createQuery($current);

        return $stmt->execute();
    }

    public function findByEnter()
    {

        $enter = "SELECT c.ordre,p.nomProduit, SUM(mvt.quantite) entrer, CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(c.prixDeVente),SUM(mvt.quantite*c.prixDeVente) valeur
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types = 1 AND mvt.id NOT IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)
        GROUP BY mvt.produit";
        $stmt = $this->getEntityManager()->createQuery($enter);

        return $stmt->execute();
    }

    public function findByOut()
    {

       $out = "SELECT c.ordre,p.nomProduit, SUM(mvt.quantite) sortie, CONCAT(c.ordre,'_', p.id ) ordreProd,SUM(c.prixDeVente),SUM(mvt.quantite*c.prixDeVente) valeur
        FROM  App\Entity\Categorie c INNER JOIN App\Entity\Mouvement mvt 
        WITH c.id = mvt.Categorie 
        INNER JOIN App\Entity\Produits p WITH p.id = c.produit
        WHERE mvt.types = 2 AND mvt.id NOT IN (SELECT MIN(mvt2.id) FROM App\Entity\Mouvement mvt2 GROUP BY mvt2.Categorie)
        GROUP BY mvt.produit";
        $stmt = $this->getEntityManager()->createQuery($out);
        
        return $stmt->execute();
    }

    public function findByOne()
    {
        $product = "SELECT p.nomProduit objet,p.Abbreviation abbr, SUM(mvt.quantite) nombre,SUM(c.prixDeVente) valeur
        FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
        WITH p.id = mvt.produit 
        INNER JOIN App\Entity\Categorie c 
        WITH c.id = mvt.Categorie 
        GROUP BY mvt.produit";

        $stmt = $this->getEntityManager()->createQuery($product);

        return $stmt->execute();
    }
    
}
