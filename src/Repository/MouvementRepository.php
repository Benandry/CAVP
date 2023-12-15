<?php

namespace App\Repository;

use App\Entity\Agence;
use App\Entity\Categorie;
use App\Entity\Descriptions;
use App\Entity\Mouvement;
use App\Entity\Produits;
use App\Entity\Types;
use App\Entity\User;
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
    
    public function findByValeurDispo($value)
    {
       // $value = 2;
        $rawSql = "SELECT c.id iDcategorie, c.NomDeCategorie categorie,SUM(mvt.quantite) valeur_dispo,c.tpParPl,o.type_order_short,p.nomProduit
            FROM  App\Entity\Produits p
            INNER JOIN App\Entity\Categorie c WITH c.produit = p.id 
            LEFT JOIN App\Entity\Mouvement mvt WITH c.id = mvt.Categorie
            LEFT JOIN App\Entity\OrderTypes o WITH o.id = p.types
            WHERE p.id = $value 
            GROUP BY c.id";
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

        $rawSql = "SELECT mvt.id, c.ordre,p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre, f.name reference ,
                 a.name destination, t.name types,d.information descriptions, d.id descri,u.nom user,o.id types_prod,o.type_order_long types_order,
                 mvt.number_sortie,mvt.number_planche
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit 
            INNER JOIN App\Entity\Categorie c WITH c.id = mvt.Categorie
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types
            INNER JOIN App\Entity\User u WITH u.id = mvt.User
            INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
            INNER JOIN App\Entity\OrderTypes o WITH o.id = p.types
            $clause
            ORDER BY mvt.id DESC";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }

    /* ***************************************************** */

    public function findAllMouvement() : array
    {

        return $this->createQueryBuilder('m')->select([
            'm.id',
            'm.dateEntrer',
            'm.quantite',
            'p.nomProduit',
            'c.NomDeCategorie',
            'a.name agence',
            'u.nom user',
            't.name operation',
            'd.information'
            ])
            ->join(Produits::class,'p')
            ->join(Categorie::class,'c')
            ->join(Agence::class,'a')
            ->join(User::class,'u')
            ->join(Types::class,'t')
            ->join(Descriptions::class,'d')
            ->where('p.id = m.produit')
            ->andWhere('c.id = m.Categorie')
            ->andWhere('a.id = m.Agence')
            ->andWhere('u.id = m.User')
            ->andWhere('t.id = m.types')
            ->andWhere('d.id = m.descriptions')
            ->getQuery()->getResult();

        // dd($qb);
        
        // $rawSql = "SELECT
        //     mvt.id,
        //     p.nomProduit product,
        //     mvt.dateEntrer dat, 
        //     c.NomDeCategorie categorie,
        //     mvt.quantite nombre, 
        //     -- f.name reference ,
        //     u.nom user,
        //     t.name types,
        //     d.information desccriptions,
        //     a.name destination
        //     FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
        //     WITH p.id = mvt.produit 
        //     INNER JOIN App\Entity\Categorie c  WITH c.id = mvt.Categorie 
        //     INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
        //     -- INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
        //     INNER JOIN App\Entity\User u WITH u.id = mvt.User
        //     INNER JOIN App\Entity\Types t WITH t.id = mvt.types
        //     INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
        //     ORDER BY mvt.id DESC";
        // $stmt = $this->getEntityManager()->createQuery($rawSql);

        // return $stmt->execute();
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