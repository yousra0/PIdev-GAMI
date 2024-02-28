<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ContenuRep = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateRep = null;

    #[ORM\OneToMany(targetEntity: Reclamation::class, mappedBy: 'reclamation')]
    private Collection $reclamations;

   
    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setReponse($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getReponse() === $this) {
                $reclamation->setReponse(null);
            }
        }

        return $this;
    }

   
}
