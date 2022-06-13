<?php

namespace App\Entity;

use App\Repository\OrderSortieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderSortieRepository::class)]
class OrderSortie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $numero_de_sortie;

    #[ORM\Column(type: 'date')]
    private $dateOrdre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOrdre(): ?\DateTimeInterface
    {
        return $this->dateOrdre;
    }

    public function setDateOrdre(\DateTimeInterface $dateOrdre): self
    {
        $this->dateOrdre = $dateOrdre;

        return $this;
    }
    public function getNumeroDeSortie(): ?string
    {
        return $this->numero_de_sortie;
    }

    public function setNumeroDeSortie(string $numero_de_sortie): self
    {
        $this->numero_de_sortie = $numero_de_sortie;

        return $this;
    }
}
