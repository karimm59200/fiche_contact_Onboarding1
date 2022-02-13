<?php

namespace App\Repository;

use App\Entity\department;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method department|null find($id, $lockMode = null, $lockVersion = null)
 * @method department|null findOneBy(array $criteria, array $orderBy = null)
 * @method department[]    findAll()
 * @method department[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class departmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, department::class);
    }

    // /**
    //  * @return department[] Returns an array of department objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?department
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
