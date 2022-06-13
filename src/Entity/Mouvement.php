<?php

namespace App\Entity;

use App\Repository\MouvementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MouvementRepository::class)]
class Mouvement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Produits::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private $produit;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private $reference;

    #[ORM\ManyToOne(targetEntity: Agence::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: true)]
    private $Agence;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private $User;

    #[ORM\Column(type: 'date')]
    private $dateEntrer;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private $Categorie;

    #[ORM\ManyToOne(targetEntity: Types::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private $types;

    #[ORM\ManyToOne(targetEntity: Descriptions::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: false)]
    private $descriptions;

    #[ORM\ManyToOne(targetEntity: OrderSortie::class, inversedBy: 'mouvements')]
    #[ORM\JoinColumn(nullable: true)]
    private $numero_de_sortie;

    public function __construct()
    {
        $this->dateEntrer = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getReference(): ?Fournisseur
    {
        return $this->reference;
    }

    public function setReference(?Fournisseur $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->Agence;
    }

    public function setAgence(?Agence $Agence): self
    {
        $this->Agence = $Agence;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getDateEntrer(): ?\DateTimeInterface
    {
        return $this->dateEntrer;
    }

    public function setDateEntrer(\DateTimeInterface $dateEntrer): self
    {
        $this->dateEntrer = $dateEntrer;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categorie $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getTypes(): ?Types
    {
        return $this->types;
    }

    public function setTypes(?Types $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function getDescriptions(): ?Descriptions
    {
        return $this->descriptions;
    }

    public function setDescriptions(?Descriptions $descriptions): self
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    public function getNumeroDeSortie(): ?OrderSortie
    {
        return $this->numero_de_sortie;
    }

    public function setNumeroDeSortie(?OrderSortie $numero_de_sortie): self
    {
        $this->numero_de_sortie = $numero_de_sortie;

        return $this;
    }
}
