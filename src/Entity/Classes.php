<?php

namespace App\Entity;

use App\Repository\ClassesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClassesRepository::class)
 */
class Classes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $classe_libelle;

    /**
     * @ORM\OneToMany(targetEntity=Student::class, mappedBy="classe")
     */
    private $students;

    public function __construct()
    {
        $this->students = new ArrayCollection();
    }

    public function __toString():string
    {
        return $this->classe_libelle;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClasseLibelle(): ?string
    {
        return $this->classe_libelle;
    }

    public function setClasseLibelle(string $classe_libelle): self
    {
        $this->classe_libelle = $classe_libelle;

        return $this;
    }

    /**
     * @return Collection|Student[]
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setClasse($this);
        }

        return $this;
    }

    public function removeStudent(Student $student): self
    {
        if ($this->students->removeElement($student)) {
            // set the owning side to null (unless already changed)
            if ($student->getClasse() === $this) {
                $student->setClasse(null);
            }
        }

        return $this;
    }
}
