<?php

namespace App\Entity;

use App\Repository\CouleurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CouleurRepository::class)
 */
class Couleur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Cleat::class, mappedBy="couleurs")
     */
    private $cleats;

    public function __construct()
    {
        $this->cleats = new ArrayCollection();
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
     * @return Collection<int, Cleat>
     */
    public function getCleats(): Collection
    {
        return $this->cleats;
    }

    public function addCleat(Cleat $cleat): self
    {
        if (!$this->cleats->contains($cleat)) {
            $this->cleats[] = $cleat;
            $cleat->addCouleur($this);
        }

        return $this;
    }

    public function removeCleat(Cleat $cleat): self
    {
        if ($this->cleats->removeElement($cleat)) {
            $cleat->removeCouleur($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
