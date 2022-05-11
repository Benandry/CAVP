<?php

namespace App\Entity;

use App\Repository\SituationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SituationRepository::class)]
class Situation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Produits::class, inversedBy: 'situations')]
    #[ORM\JoinColumn(nullable: false)]
    private $produit;

    #[ORM\Column(type: 'integer')]
    private $ordre;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'situations')]
    #[ORM\JoinColumn(nullable: false)]
    private $categorie;

    #[ORM\Column(type: 'integer')]
    private $nombrePlanche;

    #[ORM\Column(type: 'float')]
    private $valeurFaciale;

    #[ORM\Column(type: 'float')]
    private $prixDeVente;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $themes;

    #[ORM\Column(type: 'date', nullable: true)]
    private $anneeEmission;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $numero;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $nature;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $coteEmission;

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

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNombrePlanche(): ?int
    {
        return $this->nombrePlanche;
    }

    public function setNombrePlanche(int $nombrePlanche): self
    {
        $this->nombrePlanche = $nombrePlanche;

        return $this;
    }

    public function getValeurFaciale(): ?float
    {
        return $this->valeurFaciale;
    }

    public function setValeurFaciale(float $valeurFaciale): self
    {
        $this->valeurFaciale = $valeurFaciale;

        return $this;
    }

    public function getPrixDeVente(): ?float
    {
        return $this->prixDeVente;
    }

    public function setPrixDeVente(float $prixDeVente): self
    {
        $this->prixDeVente = $prixDeVente;

        return $this;
    }

    public function getThemes(): ?string
    {
        return $this->themes;
    }

    public function setThemes(?string $themes): self
    {
        $this->themes = $themes;

        return $this;
    }

    public function getAnneeEmission(): ?\DateTimeInterface
    {
        return $this->anneeEmission;
    }

    public function setAnneeEmission(?\DateTimeInterface $anneeEmission): self
    {
        $this->anneeEmission = $anneeEmission;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(?string $nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getCoteEmission(): ?string
    {
        return $this->coteEmission;
    }

    public function setCoteEmission(?string $coteEmission): self
    {
        $this->coteEmission = $coteEmission;

        return $this;
    }
}
