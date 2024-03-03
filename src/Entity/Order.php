<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection; 
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stripe_token = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $brand_stripe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $last4_stripe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_charge_stripe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status_stripe = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    private ?User $user_id = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'orders')]
    private Collection $products;

     

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStripeToken(): ?string
    {
        return $this->stripe_token;
    }

    public function setStripeToken(?string $stripe_token): static
    {
        $this->stripe_token = $stripe_token;

        return $this;
    }

    public function getBrandStripe(): ?string
    {
        return $this->brand_stripe;
    }

    public function setBrandStripe(?string $brand_stripe): static
    {
        $this->brand_stripe = $brand_stripe;

        return $this;
    }

    public function getLast4Stripe(): ?string
    {
        return $this->last4_stripe;
    }

    public function setLast4Stripe(?string $last4_stripe): static
    {
        $this->last4_stripe = $last4_stripe;

        return $this;
    }

    public function getIdChargeStripe(): ?string
    {
        return $this->id_charge_stripe;
    }

    public function setIdChargeStripe(?string $id_charge_stripe): static
    {
        $this->id_charge_stripe = $id_charge_stripe;

        return $this;
    }

    public function getStatusStripe(): ?string
    {
        return $this->status_stripe;
    }

    public function setStatusStripe(?string $status_stripe): static
    {
        $this->status_stripe = $status_stripe;

        return $this;
    }

    public function getUser(): ?User
{
    return $this->user_id;
}


    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product, ?int $rating = null): static
{
    if (!$this->products->contains($product)) {
        $this->products->add($product);
        // If a rating is provided, associate it with the product
        if ($rating !== null) {
            $product->setRating($rating);
        }
    }

    return $this;
}

    public function removeProduct(Product $product): static
    {
        $this->products->removeElement($product);

        return $this;
    }

    

    

 
}
