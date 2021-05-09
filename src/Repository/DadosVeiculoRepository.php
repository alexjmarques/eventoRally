<?php

namespace App\Repository;

use App\Entity\DadosVeiculo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DadosVeiculo|null find($id, $lockMode = null, $lockVersion = null)
 * @method DadosVeiculo|null findOneBy(array $criteria, array $orderBy = null)
 * @method DadosVeiculo[]    findAll()
 * @method DadosVeiculo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DadosVeiculoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DadosVeiculo::class);
    }

    // /**
    //  * @return DadosVeiculo[] Returns an array of DadosVeiculo objects
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
    public function findOneBySomeField($value): ?DadosVeiculo
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
