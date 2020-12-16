<?php

namespace App\Entity;

use App\Repository\SejoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SejoursRepository::class)
 */
class Sejours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomsPatient;

    /**
     * @ORM\Column(type="date")
     */
    private $date_entree;

    /**
     * @ORM\Column(type="date")
     */
    private $date_sortie;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_service;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $Chambre;

    public function getId(): ?integer
    {
        return $this->id;
    }

    public function getnomsPatient(): ?string
    {
        return $this->nomsPatient;
    }

    public function setnomsPatient(string $nomsPatient): self
    {
        $this->nomsPatient = $nomsPatient;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->date_entree;
    }

    public function setDateEntree(\DateTimeInterface $date_entree): self
    {
        $this->date_entree = $date_entree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): self
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getNomService(): ?string
    {
        return $this->nom_service;
    }

    public function setNomService(string $nom_service): self
    {
        $this->nom_service = $nom_service;

        return $this;
    }

    public function getChambre(): ?string
    {
        return $this->Chambre;
    }

    public function setChambre(string $Chambre): self
    {
        $this->Chambre = $Chambre;

        return $this;
    }
}
