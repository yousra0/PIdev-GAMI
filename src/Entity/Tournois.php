<?php

namespace App\Entity;

use App\Repository\TournoisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournoisRepository::class)]
class Tournois
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $jeu = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\Column(length: 255)]
    private ?string $recomponse = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $regle = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $nb_equipe = null;

    #[ORM\OneToMany(targetEntity: Equipes::class, mappedBy: 'tournois', orphanRemoval: true)]
    private Collection $equipes;
    public function __toString()
    {
        return $this->getJeu();
    }

    public function __construct()
    {
        $this->equipes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getJeu(): ?string
    {
        return $this->jeu;
    }

    public function setJeu(string $jeu): static
    {
        $this->jeu = $jeu;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getRecomponse(): ?string
    {
        return $this->recomponse;
    }

    public function setRecomponse(string $recomponse): static
    {
        $this->recomponse = $recomponse;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getRegle(): ?string
    {
        return $this->regle;
    }

    public function setRegle(string $regle): static
    {
        $this->regle = $regle;

        return $this;
    }

    public function getNbEquipe(): ?int
    {
        return $this->nb_equipe;
    }

    public function setNbEquipe(int $nb_equipe): static
    {
        $this->nb_equipe = $nb_equipe;

        return $this;
    }

    /**
     * @return Collection<int, Equipes>
     */
    public function getEquipes(): Collection
    {
        return $this->equipes;
    }

    public function addEquipe(Equipes $equipe): static
    {
        if (!$this->equipes->contains($equipe)) {
            $this->equipes->add($equipe);
            $equipe->setTournois($this);
        }

        return $this;
    }

    public function removeEquipe(Equipes $equipe): static
    {
        if ($this->equipes->removeElement($equipe)) {
            // set the owning side to null (unless already changed)
            if ($equipe->getTournois() === $this) {
                $equipe->setTournois(null);
            }
        }

        return $this;
    }
}
