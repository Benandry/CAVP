<?php

namespace App\Entity;

use App\Repository\DescriptionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DescriptionsRepository::class)]
class Descriptions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $information;

    #[ORM\OneToMany(mappedBy: 'descriptions', targetEntity: Mouvement::class)]
    private $mouvements;

    #[ORM\ManyToOne(targetEntity: Types::class, inversedBy: 'descriptions')]
    private $types;


    public function __construct()
    {
        $this->mouvements = new ArrayCollection();
    }
    public function __toString()
    {   
       return $this->getInformation();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInformation(): ?string
    {
        return $this->information;
    }

    public function setInformation(string $information): self
    {
        $this->information = $information;

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
            $mouvement->setDescriptions($this);
        }

        return $this;
    }

    public function removeMouvement(Mouvement $mouvement): self
    {
        if ($this->mouvements->removeElement($mouvement)) {
            // set the owning side to null (unless already changed)
            if ($mouvement->getDescriptions() === $this) {
                $mouvement->setDescriptions(null);
            }
        }

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
}



	
	
#desccriptions	"Ajouter des nouveaux Catégories"
	
#desccriptions	"Réintegration"

#desccriptions	"Sorties des Catégories"

#entrée  |               0 |
#|  2 | sortie