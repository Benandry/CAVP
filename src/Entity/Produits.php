<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomProduit;

    #[ORM\Column(type: 'string', length: 255)]
    private $Abbreviation;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Mouvement::class)]
    private $mouvements;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Categorie::class)]
    private $categories;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Situation::class)]
    private $situations;

    #[ORM\ManyToOne(targetEntity: OrderTypes::class, inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private $types;


    public function __construct()
    {
        $this->mouvements = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->situations = new ArrayCollection();
    }

    public function __toString()
    {   
       return $this->getNomProduit();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $NomProduit): self
    {
        $this->nomProduit = $NomProduit;

        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->Abbreviation;
    }

    public function setAbbreviation(string $Abbreviation): self
    {
        $this->Abbreviation = $Abbreviation;

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
            $mouvement->setProduit($this);
        }

        return $this;
    }

    public function removeMouvement(Mouvement $mouvement): self
    {
        if ($this->mouvements->removeElement($mouvement)) {
            // set the owning side to null (unless already changed)
            if ($mouvement->getProduit() === $this) {
                $mouvement->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setProduit($this);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getProduit() === $this) {
                $category->setProduit(null);
            }
        }

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
            $situation->setProduit($this);
        }

        return $this;
    }

    public function removeSituation(Situation $situation): self
    {
        if ($this->situations->removeElement($situation)) {
            // set the owning side to null (unless already changed)
            if ($situation->getProduit() === $this) {
                $situation->setProduit(null);
            }
        }

        return $this;
    }

    public function getTypes(): ?OrderTypes
    {
        return $this->types;
    }

    public function setTypes(?OrderTypes $types): self
    {
        $this->types = $types;

        return $this;
    }
}
