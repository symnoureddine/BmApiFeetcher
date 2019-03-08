<?php

namespace App\Repository;

use App\Entity\ApiAuth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ApiAuth|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApiAuth|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApiAuth[]    findAll()
 * @method ApiAuth[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApiAuthRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ApiAuth::class);
    }

    // /**
    //  * @return ApiAuth[] Returns an array of ApiAuth objects
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
    public function findOneBySomeField($value): ?ApiAuth
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
