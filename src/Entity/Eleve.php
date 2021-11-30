<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve", indexes={@ORM\Index(name="note_Id", columns={"note_Id"}), @ORM\Index(name="classe_Id", columns={"classe_Id"})})
 * @ORM\Entity
 */
class Eleve
{
    /**
     * @var int
     *
     * @ORM\Column(name="eleve_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eleveId;

    /**
     * @var \Notes
     *
     * @ORM\ManyToOne(targetEntity="Notes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_Id", referencedColumnName="note_Id")
     * })
     */
    private $note;

    /**
     * @var \Classes
     *
     * @ORM\ManyToOne(targetEntity="Classes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classe_Id", referencedColumnName="classe_Id")
     * })
     */
    private $classe;

    public function getEleveId(): ?int
    {
        return $this->eleveId;
    }

    public function getNote(): ?Notes
    {
        return $this->note;
    }

    public function setNote(?Notes $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getClasse(): ?Classes
    {
        return $this->classe;
    }

    public function setClasse(?Classes $classe): self
    {
        $this->classe = $classe;

        return $this;
    }


}
