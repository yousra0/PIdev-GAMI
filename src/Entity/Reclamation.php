<?php

namespace App\Entity;
use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use phpDocumentor\Reflection\Types\Integer;


#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
//#[ApiResource]

class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;



    #[ORM\Column(length: 255)]
    private ?string $TitreRec = null;

    #[ORM\Column(length: 255)]
    private ?string $ContenuRec = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $DateRec = null;


    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'reclamation')]
    private Collection $reponses;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

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

    


    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): static
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setReclamation($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): static
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getReclamation() === $this) {
                $reponse->setReclamation(null);
            }
        }

        return $this;
    }

}
