<?php

namespace App\Entity;

use App\Repository\SecretaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SecretaireRepository::class)
 */
class Secretaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $idSecretaire;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $mdp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSecretaire(): ?string
    {
        return $this->idSecretaire;
    }

    public function setIdSecretaire(string $idSecretaire): self
    {
        $this->idSecretaire = $idSecretaire;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }
}
