<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes", indexes={@ORM\Index(name="classe_Id", columns={"classe_Id"})})
 * @ORM\Entity
 */
class Notes
{
    /**
     * @var int
     *
     * @ORM\Column(name="note_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noteId;

    /**
     * @var int
     *
     * @ORM\Column(name="note_Valeur_Repas", type="integer", nullable=false)
     */
    private $noteValeurRepas;

    /**
     * @var int
     *
     * @ORM\Column(name="note_Valeur_Environnement", type="integer", nullable=false)
     */
    private $noteValeurEnvironnement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_Commentaire", type="blob", length=65535, nullable=true)
     */
    private $noteCommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="note_date", type="date", nullable=false)
     */
    private $noteDate;

    /**
     * @var \Classes
     *
     * @ORM\ManyToOne(targetEntity="Classes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classe_Id", referencedColumnName="classe_Id")
     * })
     */
    private $classe;

    public function getNoteId(): ?int
    {
        return $this->noteId;
    }

    public function getNoteValeurRepas(): ?int
    {
        return $this->noteValeurRepas;
    }

    public function setNoteValeurRepas(int $noteValeurRepas): self
    {
        $this->noteValeurRepas = $noteValeurRepas;

        return $this;
    }

    public function getNoteValeurEnvironnement(): ?int
    {
        return $this->noteValeurEnvironnement;
    }

    public function setNoteValeurEnvironnement(int $noteValeurEnvironnement): self
    {
        $this->noteValeurEnvironnement = $noteValeurEnvironnement;

        return $this;
    }

    public function getNoteCommentaire()
    {
        return $this->noteCommentaire;
    }

    public function setNoteCommentaire($noteCommentaire): self
    {
        $this->noteCommentaire = $noteCommentaire;

        return $this;
    }

    public function getNoteDate(): ?\DateTimeInterface
    {
        return $this->noteDate;
    }

    public function setNoteDate(\DateTimeInterface $noteDate): self
    {
        $this->noteDate = $noteDate;

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
