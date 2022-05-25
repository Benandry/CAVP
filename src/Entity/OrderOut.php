<?php

namespace App\Entity;

use App\Repository\OrderOutRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderOutRepository::class)]
class OrderOut
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $number_order_out;

    #[ORM\Column(type: 'date')]
    private $date_order_out;

    #[ORM\ManyToOne(targetEntity: Produits::class, inversedBy: 'orderOuts')]
    #[ORM\JoinColumn(nullable: false)]
    private $produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberOrderOut(): ?string
    {
        return $this->number_order_out;
    }

    public function setNumberOrderOut(string $number_order_out): self
    {
        $this->number_order_out = $number_order_out;

        return $this;
    }

    public function getDateOrderOut(): ?\DateTimeInterface
    {
        return $this->date_order_out;
    }

    public function setDateOrderOut(\DateTimeInterface $date_order_out): self
    {
        $this->date_order_out = $date_order_out;

        return $this;
    }

    public function getProduit(): ?Produits
    {
        return $this->produit;
    }

    public function setProduit(?Produits $produit): self
    {
        $this->produit = $produit;

        return $this;
    }
}
