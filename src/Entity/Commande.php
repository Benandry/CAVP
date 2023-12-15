<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Types;

    #[ORM\Column(type: 'string', length: 255)]
    private $categorie;

    #[ORM\Column(type: 'string', length: 255)]
    private $produit;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypes(): ?string
    {
        return $this->Types;
    }

    public function setTypes(string $Types): self
    {
        $this->Types = $Types;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
