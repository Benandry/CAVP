<?php

namespace App\Repository;

use App\Entity\Mouvement;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Mouvement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mouvement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mouvement[]    findAll()
 * @method Mouvement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MouvementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mouvement::class);
    }

    // /**
    //  * @return Mouvement[] Returns an array of Mouvement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findByhistory()
    {
        $rawSql = "SELECT p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference , a.name destination, t.name types
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types
            INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
            ORDER BY mvt.dateEntrer DESC";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }

    public function findByEnter()
    {
        $rawSql = "SELECT mvt.id, p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference , a.name destination, t.name types
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types 
            WHERE mvt.descriptions=1
            ORDER BY mvt.dateEntrer DESC";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }

    public function findByOut()
    {
        $rawSql = "SELECT p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference , a.name destination, t.name types
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types 
            WHERE mvt.descriptions=3
            ORDER BY mvt.dateEntrer DESC";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }
    public function findByIntegreted()
    {
        $rawSql = "SELECT p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference , a.name destination, d.information descriptions
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types 
            INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions 
            WHERE mvt.descriptions=2
            ORDER BY mvt.dateEntrer DESC";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();

    }

    ///////=======================Avec precision de la date ========================================////////////////////
    public function findByDate($date_precis)
    {
        $rawSql = "SELECT p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference , a.name destination, t.name types
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types
            INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
            WHERE mvt.dateEntrer = '$date_precis'";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }
        ///////=======================Avec precision de la date mois et année ========================================////////////////////
        public function findByMois($mois,$year)
        {
            $rawSql = "SELECT p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference , a.name destination, t.name types
                FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
                WITH p.id = mvt.produit INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
                INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
                INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
                INNER JOIN App\Entity\Types t WITH t.id = mvt.types
                INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
                WHERE MONTH(mvt.dateEntrer) = '$mois' and YEAR(mvt.dateEntrer) = '$year'";
            $stmt = $this->getEntityManager()->createQuery($rawSql);
    
            return $stmt->execute();
        }


}





























