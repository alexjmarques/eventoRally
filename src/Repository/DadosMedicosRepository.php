<?php

namespace App\Repository;

use App\Entity\DadosMedicos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DadosMedicos|null find($id, $lockMode = null, $lockVersion = null)
 * @method DadosMedicos|null findOneBy(array $criteria, array $orderBy = null)
 * @method DadosMedicos[]    findAll()
 * @method DadosMedicos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DadosMedicosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DadosMedicos::class);
    }

    // /**
    //  * @return DadosMedicos[] Returns an array of DadosMedicos objects
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
    public function findOneBySomeField($value): ?DadosMedicos
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
