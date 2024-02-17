<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ApiResource]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $contenuPub = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $datePub = null;

    #[ORM\Column(length: 255)]
    private ?string $file = null;

    #[ORM\Column(type: 'integer')]
    private $likes = 0;

    #[ORM\Column(type: 'integer')]
    private $dislikes = 0;

    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'post')]
    private Collection $comments;



    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenuPub(): ?string
    {
        return $this->contenuPub;
    }

    public function setContenuPub(?string $contenuPub): static
    {
        $this->contenuPub = $contenuPub;

        return $this;
    }

    public function getDatePub(): ?\DateTimeInterface
    {
        return $this->datePub;
    }

    public function setDatePub(\DateTimeInterface $datePub): self
    {
        $this->datePub = $datePub;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): static
    {
        $this->file = $file;

        return $this;
    }




    public function getLikes(): ?int
{
    return $this->likes;
}

public function setLikes(int $likes): self
{
    $this->likes = $likes;

    return $this;
}

public function getDislikes(): ?int
{
    return $this->dislikes;
}

public function setDislikes(int $dislikes): self
{
    $this->dislikes = $dislikes;

    return $this;
}
public function getFormattedDatePost(): ?string
    {
        return $this->datePub ? $this->datePub->format('Y-m-d H:i:s') : '';
    }





/**
 * @return Collection<int, Comment>
 */
    public function getComments(): Collection
    {
        return $this->comments;
    }

public function addComment(Comment $comment): static
{
    if (!$this->comments->contains($comment)) {
        $this->comments->add($comment);
        $comment->setPost($this);
    }

    return $this;
}

public function removeComment(Comment $comment): static
{
    if ($this->comments->removeElement($comment)) {
        // set the owning side to null (unless already changed)
        if ($comment->getPost() === $this) {
            $comment->setPost(null);
        }
    }

    return $this;
}


}
