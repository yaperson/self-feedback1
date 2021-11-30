<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity
 */
class Classes
{
    /**
     * @var int
     *
     * @ORM\Column(name="classe_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classeId;

    /**
     * @var string
     *
     * @ORM\Column(name="classe_libelle", type="string", length=50, nullable=false)
     */
    private $classeLibelle;

    public function getClasseId(): ?int
    {
        return $this->classeId;
    }

    public function getClasseLibelle(): ?string
    {
        return $this->classeLibelle;
    }

    public function setClasseLibelle(string $classeLibelle): self
    {
        $this->classeLibelle = $classeLibelle;

        return $this;
    }


}
