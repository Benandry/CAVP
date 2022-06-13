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

    public function findByProduct()
    {
        $product = "SELECT SUM(mvt.quantite) nombre, p.nomProduit objet
        FROM App\Entity\Mouvement mvt INNER JOIN App\Entity\Produits p 
        WITH p.id = mvt.produit 
        GROUP BY mvt.produit";

        $stmt = $this->getEntityManager()->createQuery($product);

        return $stmt->execute();
    }

    public function findByOne()
    {
        $product = "SELECT p.nomProduit objet,p.Abbreviation abbr,p.nomProduit nombre,p.nomProduit valeur
        FROM App\Entity\Produits p";

        $stmt = $this->getEntityManager()->createQuery($product);

        return $stmt->execute();
    }
    
}
