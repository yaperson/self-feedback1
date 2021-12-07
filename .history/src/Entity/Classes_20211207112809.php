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
     * @ORM\OneToMany(targetEntity=note::class, mappedBy="classe")
     */
    private $notes;

    public function __construct()
    {
        $this->notes = new ArrayCollection();
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
     * @return Collection|note[]
     */
    public function getnotes(): Collection
    {
        return $this->notes;
    }

    public function addnote(note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes[] = $note;
            $note->setClasse($this);
        }

        return $this;
    }

    public function removenote(note $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getClasse() === $this) {
                $note->setClasse(null);
            }
        }

        return $this;
    }
}
