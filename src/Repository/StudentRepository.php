<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Student|null find($id, $lockMode = null, $lockVersion = null)
 * @method Student|null findOneBy(array $criteria, array $orderBy = null)
 * @method Student[]    findAll()
 * @method NoteWeek[]   findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Student[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }

    // /**
    //  * @return NoteWeek[] Returns an array of Student objects
    //  */
    
    public function findWeek($startdate): ?array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT note_date FROM notes WHERE note_date BETWEEN '$startdate' AND date_add('$startdate', interval 4 day);";
        $query = $conn->executeQuery($sql);
        $result = $query->fetchAll();
        return $result;
    }
    

    /*
    public function findOneById($value): ?Student
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
