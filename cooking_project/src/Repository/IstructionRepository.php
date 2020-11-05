<?php

namespace App\Repository;

use App\Entity\Istruction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Istruction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Istruction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Istruction[]    findAll()
 * @method Istruction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IstructionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Istruction::class);
    }

    // /**
    //  * @return Istruction[] Returns an array of Istruction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Istruction
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
