<?php

namespace App\Repository;

use App\Entity\AccountsManagers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AccountsManagers|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountsManagers|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountsManagers[]    findAll()
 * @method AccountsManagers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountsManagersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountsManagers::class);
    }

    // /**
    //  * @return AccountsManagers[] Returns an array of AccountsManagers objects
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
    public function findOneBySomeField($value): ?AccountsManagers
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
