<?php

namespace App\Entity;

use App\Repository\TerrainRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TerrainRepository::class)
 */
class Terrain
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
     * @ORM\OneToMany(targetEntity=Cleat::class, mappedBy="terrain")
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
            $cleat->setTerrain($this);
        }

        return $this;
    }

    public function removeCleat(Cleat $cleat): self
    {
        if ($this->cleats->removeElement($cleat)) {
            // set the owning side to null (unless already changed)
            if ($cleat->getTerrain() === $this) {
                $cleat->setTerrain(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name; //va retourner le nom du type de terrain pour que ce soit en string
    }
}
