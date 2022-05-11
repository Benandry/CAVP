<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $NomDeCategorie;

    #[ORM\Column(type: 'integer')]
    private $ordre;

    #[ORM\ManyToOne(targetEntity: Produits::class, inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private $produit;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Situation::class)]
    private $situations;

    #[ORM\OneToMany(mappedBy: 'Categorie', targetEntity: Mouvement::class)]
    private $mouvements;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $valeurFaciale;

    #[ORM\Column(type: 'float', nullable: true)]
    private $prixDeVente;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $AnneeEmission;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $coteEmission;

    public function __construct()
    {
        $this->situations = new ArrayCollection();
        $this->mouvements = new ArrayCollection();
    }
    public function __toString()
    {   
       return $this->getNomDeCategorie();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeCategorie(): ?string
    {
        return $this->NomDeCategorie;
    }

    public function setNomDeCategorie(string $NomDeCategorie): self
    {
        $this->NomDeCategorie = $NomDeCategorie;

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

    public function getProduit(): ?Produits
    {
        return $this->produit;
    }

    public function setProduit(?Produits $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * @return Collection|Situation[]
     */
    public function getSituations(): Collection
    {
        return $this->situations;
    }

    public function addSituation(Situation $situation): self
    {
        if (!$this->situations->contains($situation)) {
            $this->situations[] = $situation;
            $situation->setCategorie($this);
        }

        return $this;
    }

    public function removeSituation(Situation $situation): self
    {
        if ($this->situations->removeElement($situation)) {
            // set the owning side to null (unless already changed)
            if ($situation->getCategorie() === $this) {
                $situation->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Mouvement[]
     */
    public function getMouvements(): Collection
    {
        return $this->mouvements;
    }

    public function addMouvement(Mouvement $mouvement): self
    {
        if (!$this->mouvements->contains($mouvement)) {
            $this->mouvements[] = $mouvement;
            $mouvement->setCategorie($this);
        }

        return $this;
    }

    public function removeMouvement(Mouvement $mouvement): self
    {
        if ($this->mouvements->removeElement($mouvement)) {
            // set the owning side to null (unless already changed)
            if ($mouvement->getCategorie() === $this) {
                $mouvement->setCategorie(null);
            }
        }

        return $this;
    }

    public function getValeurFaciale(): ?int
    {
        return $this->valeurFaciale;
    }

    public function setValeurFaciale(?int $valeurFaciale): self
    {
        $this->valeurFaciale = $valeurFaciale;

        return $this;
    }

    public function getPrixDeVente(): ?float
    {
        return $this->prixDeVente;
    }

    public function setPrixDeVente(?float $prixDeVente): self
    {
        $this->prixDeVente = $prixDeVente;

        return $this;
    }

    public function getAnneeEmission(): ?string
    {
        return $this->AnneeEmission;
    }

    public function setAnneeEmission(?string $AnneeEmission): self
    {
        $this->AnneeEmission = $AnneeEmission;

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
