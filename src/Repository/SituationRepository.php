<?php

namespace App\Repository;

use App\Entity\Situation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Situation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Situation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Situation[]    findAll()
 * @method Situation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SituationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Situation::class);
    }

    public function findBySubmitMouvement()
    {
        $rawSql = "SELECT mvt.id, p.nomProduit product,mvt.dateEntrer dat, c.NomDeCategorie categorie,mvt.quantite nombre,mvt.dateEntrer date_op,mvt.number_sortie numero, f.name reference ,u.nom user,
            t.name types,d.information desccriptions,a.name destination
            FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
            WITH p.id = mvt.produit 
            INNER JOIN App\Entity\Categorie c  WITH c.id = mvt.Categorie 
            INNER JOIN App\Entity\Agence a WITH a.id = mvt.Agence
            INNER JOIN App\Entity\Fournisseur f WITH f.id = mvt.reference
            INNER JOIN App\Entity\User u WITH u.id = mvt.User
            INNER JOIN App\Entity\Types t WITH t.id = mvt.types
            INNER JOIN App\Entity\Descriptions d WITH d.id = mvt.descriptions
            ORDER BY mvt.id DESC";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }


    public function findByFournisseur()
    {
        $rawSql = "SELECT f.id,f.name reference FROM App\Entity\Fournisseur f ";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }

    public function findByAgencyApi()
    {
        $rawSql = "SELECT a.id,a.name destination FROM App\Entity\Agence a ";
        $stmt = $this->getEntityManager()->createQuery($rawSql);

        return $stmt->execute();
    }

    public function findByMaxnumberOut()
    {
        $numero_sortie_max = "SELECT mvt.number_sortie numero_sortie FROM App\Entity\Mouvement mvt WHERE mvt.number_sortie IS NOT NULL AND mvt.id = (SELECT MAX(mvt2.id) FROM App\Entity\Mouvement mvt2 WHERE mvt2.number_sortie IS NOT NULL) ";
        $stmt = $this->getEntityManager()->createQuery($numero_sortie_max);
        return $stmt->execute();
    }
}
