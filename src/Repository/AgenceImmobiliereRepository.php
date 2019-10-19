<?php

namespace App\Repository;

use App\Entity\AgenceImmobiliere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AgenceImmobiliere|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgenceImmobiliere|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgenceImmobiliere[]    findAll()
 * @method AgenceImmobiliere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceImmobiliereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgenceImmobiliere::class);
    }

    // /**
    //  * @return AgenceImmobiliere[] Returns an array of AgenceImmobiliere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgenceImmobiliere
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
