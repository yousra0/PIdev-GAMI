<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TitreRec = null;

    #[ORM\Column(length: 255)]
    private ?string $ContenuRec = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $DateRec = null;

    

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?Reponse $reponse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreRec(): ?string
    {
        return $this->TitreRec;
    }

    public function setTitreRec(string $TitreRec): static
    {
        $this->TitreRec = $TitreRec;

        return $this;
    }

    public function getContenuRec(): ?string
    {
        return $this->ContenuRec;
    }

    public function setContenuRec(string $ContenuRec): static
    {
        $this->ContenuRec = $ContenuRec;

        return $this;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->DateRec;
    }

    public function setDateRec(\DateTimeInterface $DateRec): self
    {
        $this->DateRec = $DateRec;

        return $this;
    }

    

    public function getReponse(): ?Reponse
    {
        return $this->reponse;
    }

    public function setReponse(?Reponse $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }
}
