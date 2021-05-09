<?php

namespace App\Repository;

use App\Entity\UsuarioEvento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UsuarioEvento|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioEvento|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioEvento[]    findAll()
 * @method UsuarioEvento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioEventoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UsuarioEvento::class);
    }

    // /**
    //  * @return UsuarioEvento[] Returns an array of UsuarioEvento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsuarioEvento
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
