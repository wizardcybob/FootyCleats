<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MarqueRepository::class)
 */
class Marque
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\OneToMany(targetEntity=Cleat::class, mappedBy="marque", orphanRemoval=true)
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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

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
            $cleat->setMarque($this);
        }

        return $this;
    }

    public function removeCleat(Cleat $cleat): self
    {
        if ($this->cleats->removeElement($cleat)) {
            // set the owning side to null (unless already changed)
            if ($cleat->getMarque() === $this) {
                $cleat->setMarque(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
