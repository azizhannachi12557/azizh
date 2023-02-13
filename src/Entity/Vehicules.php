<?php

namespace App\Entity;

use App\Repository\VehiculesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculesRepository::class)]
class Vehicules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomvh = null;

    #[ORM\Column]
    private ?bool $dispovh = null;

    #[ORM\Column(length: 255)]
    private ?string $etatvh = null;

    #[ORM\Column(length: 255)]
    private ?string $descvh = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?categoriesvehicules $catv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomvh(): ?string
    {
        return $this->nomvh;
    }

    public function setNomvh(string $nomvh): self
    {
        $this->nomvh = $nomvh;

        return $this;
    }

    public function isDispovh(): ?bool
    {
        return $this->dispovh;
    }

    public function setDispovh(bool $dispovh): self
    {
        $this->dispovh = $dispovh;

        return $this;
    }

    public function getEtatvh(): ?string
    {
        return $this->etatvh;
    }

    public function setEtatvh(string $etatvh): self
    {
        $this->etatvh = $etatvh;

        return $this;
    }

    public function getDescvh(): ?string
    {
        return $this->descvh;
    }

    public function setDescvh(string $descvh): self
    {
        $this->descvh = $descvh;

        return $this;
    }

    public function getCatv(): ?categoriesvehicules
    {
        return $this->catv;
    }

    public function setCatv(?categoriesvehicules $catv): self
    {
        $this->catv = $catv;

        return $this;
    }
}
