<?php

namespace App\Repository;

use App\Entity\DadosProfissionais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DadosProfissionais|null find($id, $lockMode = null, $lockVersion = null)
 * @method DadosProfissionais|null findOneBy(array $criteria, array $orderBy = null)
 * @method DadosProfissionais[]    findAll()
 * @method DadosProfissionais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DadosProfissionaisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DadosProfissionais::class);
    }

    // /**
    //  * @return DadosProfissionais[] Returns an array of DadosProfissionais objects
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
    public function findOneBySomeField($value): ?DadosProfissionais
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
