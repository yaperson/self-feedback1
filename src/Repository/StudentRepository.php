<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Student|null find($id, $lockMode = null, $lockVersion = null)
 * @method Student|null findOneBy(array $criteria, array $orderBy = null)
 * @method Student[]    findAll()
 * @method Student[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }
    public function getDateRepas(): ?array
    {
        $conn = $this->getEntityManager()->getConnection();
        $madate = date("Y-m-d");
        $madate2 = date("d")-7;
        $madate3 = date("Y-m")."-".$madate2;
        //dump($madate3." ".$madate);
        $sql = 'SELECT note_repas, note_date FROM student WHERE note_date <= "'.$madate.'" AND note_date >= "'.$madate3.'";';
        $query = $conn->executeQuery($sql);
        $result = $query->fetchAll();
        //dump($result);
        return $result;
    }
    public function getDateEnv(): ?array
    {
        $conn = $this->getEntityManager()->getConnection();
        $madate = date("Y-m-d");
        $madate2 = date("d")-7;
        $madate3 = date("Y-m")."-".$madate2;
        //dump($madate3." ".$madate);
        $sql = 'SELECT note_valeur_environnement, note_date FROM student WHERE note_date <= "'.$madate.'" AND note_date >= "'.$madate3.'";';
        $query = $conn->executeQuery($sql);
        $result = $query->fetchAll();
        //dump($result);
        return $result;
    }
    // /**
    //  * @return Student[] Returns an array of Student objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Student
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
