<?php

namespace App\Entity;
use App\Repository\ReponseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;
use ApiPlatform\Metadata\ApiResource;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
//#[ApiResource]
#[Broadcast]

class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ContenuRep = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateRep = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    private ?Reclamation $reclamation = null;
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuRep(): ?string
    {
        return $this->ContenuRep;
    }

    public function setContenuRep(string $ContenuRep): static
    {
        $this->ContenuRep = $ContenuRep;

        return $this;
    }

    public function getDateRep(): ?\DateTimeInterface
    {
        return $this->DateRep;
    }

    public function setDateRep(\DateTimeInterface $DateRep): static
    {
        $this->DateRep = $DateRep;

        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;

        return $this;
    }

   
}
