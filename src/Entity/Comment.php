<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
#[ApiResource]
#[Broadcast]

class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenuComment = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $dateComment = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    private ?Post $post = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'comments')]
    private ?User $user = null;
    
    public function getUser(): ?User
    {
        return $this->user;
    }
    
    public function setUser(?User $user): self
    {
        $this->user = $user;
    
        return $this;
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuComment(): ?string
    {
        return $this->contenuComment;
    }

    public function setContenuComment(string $contenuComment): static
    {
        $this->contenuComment = $contenuComment;

        return $this;
    }

    public function getDateComment(): ?\DateTimeInterface
    {
        return $this->dateComment;
    }

    public function setDateComment(\DateTimeInterface $dateComment): self
    {
        $this->dateComment = $dateComment;

        return $this;
    }
    
    public function getFormattedDateComment(): ?string
    {
        return $this->dateComment ? $this->dateComment->format('Y-m-d H:i:s') : '';
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): static
    {
        $this->post = $post;

        return $this;
    }

    
}
