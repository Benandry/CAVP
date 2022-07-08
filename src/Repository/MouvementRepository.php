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
    
    public function findByCat($value)
    {
       // $value = 2;
        $rawSql = "SELECT c.id iDcategorie, c.NomDeCategorie categorie,SUM(mvt.quantite) valeur_dispo
            FROM  App\Entity\Produits p
            INNER JOIN App\Entity\Categorie c WITH c.produit = p.id 
            INNER JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie
            WHERE p.id = $value 
            GROUP BY mvt.Categorie";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }
    

    public function findByhistory($mois,$year,$description = "")
    {
        if ($description == "") {
            $clause = "WHERE MONTH(mvt.dateEntrer) <= '$mois' and YEAR(mvt.dateEntrer) <= '$year' ";
        }else{
            $clause = "WHERE mvt.descriptions = $description AND MONTH(mvt.dateEntrer) <= '$mois' and YEAR(mvt.dateEntrer) <= '$year'";
        }

        $rawSql = "SELECT mvt.id, p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference ,
                 a.name destination, t.name types,d.information desccriptions,u.nom user, n.id numero,o.id types_prod,o.type_order_long types_order
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit 
            INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types
            INNER JOIN App\Entity\User u WITH u.id = mvt.User
            INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
            INNER JOIN App\Entity\OrderSortie n WITH n.id = mvt.numero_de_sortie
            INNER JOIN App\Entity\OrderTypes o WITH o.id = p.types
            $clause
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
}