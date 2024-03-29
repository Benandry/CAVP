<?php

namespace App\Entity;

use App\Repository\TypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypesRepository::class)]
class Types
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'types', targetEntity: Mouvement::class)]
    private $mouvements;

    #[ORM\OneToMany(mappedBy: 'types', targetEntity: Descriptions::class)]
    private $descriptions;


    public function __construct()
    {
        $this->mouvements = new ArrayCollection();
        $this->descriptions = new ArrayCollection();
    }
    public function __toString()
    {   
       return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
            $mouvement->setTypes($this);
        }

        return $this;
    }

    public function removeMouvement(Mouvement $mouvement): self
    {
        if ($this->mouvements->removeElement($mouvement)) {
            // set the owning side to null (unless already changed)
            if ($mouvement->getTypes() === $this) {
                $mouvement->setTypes(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Descriptions[]
     */
    public function getDescriptions(): Collection
    {
        return $this->descriptions;
    }

    public function addDescription(Descriptions $description): self
    {
        if (!$this->descriptions->contains($description)) {
            $this->descriptions[] = $description;
            $description->setTypes($this);
        }

        return $this;
    }

    public function removeDescription(Descriptions $description): self
    {
        if ($this->descriptions->removeElement($description)) {
            // set the owning side to null (unless already changed)
            if ($description->getTypes() === $this) {
                $description->setTypes(null);
            }
        }

        return $this;
    }
}
