<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Cleat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cleat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cleat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cleat[]    findAll()
 * @method Cleat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CleatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cleat::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Cleat $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Cleat $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Cleat[] Returns an array of Cleat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cleat
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Recupère produits en lien avec une recherche
     * @return Cleat[]
    **/
    public function findSearch(SearchData $search): array //va chercher dans data > searchdata pour réccupérer les class terrain, marque...
    {
        $query = $this
            ->createQueryBuilder('cleat') //avant cleat c'était p (juste utilisé dans le reste de cette fonction)
            ->select('cleat', 'terrain', 'marque')
            ->join('cleat.terrain', 'terrain')
            ->join('cleat.marque', 'marque');
            // ->join('cleat.couleur', 'couleurs')
            // ->join('cleat.prix', 'prix')

        if(!empty($search->terrain)){
            $query = $query
                ->andWhere('terrain.id IN (:terrain)') //le premier terrain correspond au nom de la table dans la bdd
                ->setParameter('terrain', $search->terrain); //le premier terrain correspond au nom de la table dans la bdd
        }
        if(!empty($search->marque)){
            $query = $query
                ->andWhere('marque.id IN (:marque)')
                ->setParameter('marque', $search->marque);
        }
        // if(!empty($search->couleurs)){
        //     $query = $query
        //         ->andWhere('couleur.id IN (:couleur)')
        //         ->setParameter('couleur', $search->couleurs);
        // }
        // if(!empty($search->min)){
        //     $query = $query
        //         ->andWhere('cleat.prix >= (:min)')
        //         ->setParameter('min', $search->min);
        // }
        // if(!empty($search->max)){
        //     $query = $query
        //         ->andWhere('cleat.prix <= (:max)')
        //         ->setParameter('max', $search->max);
        // }

        return $query->getQuery()->getResult();
    }
}
