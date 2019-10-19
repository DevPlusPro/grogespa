<?php

namespace App\Repository;

use App\Entity\ProprietaireTerrien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ProprietaireTerrien|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProprietaireTerrien|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProprietaireTerrien[]    findAll()
 * @method ProprietaireTerrien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProprietaireTerrienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProprietaireTerrien::class);
    }

    // /**
    //  * @return ProprietaireTerrien[] Returns an array of ProprietaireTerrien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProprietaireTerrien
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
