<?php

namespace App\Entity;

use App\Repository\OrderTypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderTypesRepository::class)]
class OrderTypes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 20)]
    private $type_order_short;

    #[ORM\Column(type: 'string', length: 50)]
    private $type_order_long;

    #[ORM\Column(type: 'string', length: 50)]
    private $other_type;

    #[ORM\OneToMany(mappedBy: 'types', targetEntity: Produits::class)]
    private $produits;

    public function __toString()
    {   
        $types = $this->getTypeOrderLong(). '('.$this->getTypeOrderShort().')';
       return $types;
    }

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeOrderShort(): ?string
    {
        return $this->type_order_short;
    }

    public function setTypeOrderShort(string $type_order_short): self
    {
        $this->type_order_short = $type_order_short;

        return $this;
    }

    public function getTypeOrderLong(): ?string
    {
        return $this->type_order_long;
    }

    public function setTypeOrderLong(string $type_order_long): self
    {
        $this->type_order_long = $type_order_long;

        return $this;
    }

    public function getOtherType(): ?string
    {
        return $this->other_type;
    }

    public function setOtherType(string $other_type): self
    {
        $this->other_type = $other_type;

        return $this;
    }

    /**
     * @return Collection|Produits[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produits $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setTypes($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getTypes() === $this) {
                $produit->setTypes(null);
            }
        }

        return $this;
    }

}
