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
    #[ORM\JoinColumn(nullable: false)]
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

    #[ORM\Column(type: 'string', nullable: true)]
    private $number_out;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $number_planche;

    #[ORM\Column(type: 'string', nullable: true)]
    private $number_sortie;

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

    public function getNumberOut(): ?int
    {
        return $this->number_out;
    }

    public function setNumberOut(?int $number_out): self
    {
        $this->number_out = $number_out;

        return $this;
    }

    public function getNumberPlanche(): ?int
    {
        return $this->number_planche;
    }

    public function setNumberPlanche(?int $number_planche): self
    {
        $this->number_planche = $number_planche;

        return $this;
    }

    public function getNumberSortie(): ?string
    {
        return $this->number_sortie;
    }

    public function setNumberSortie(?string $number_sortie): self
    {
        $this->number_sortie = $number_sortie;

        return $this;
    }
}
