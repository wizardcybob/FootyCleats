<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity=Panier::class, inversedBy="user", cascade={"persist", "remove"})
     */
    private $panier;

    /**
     * @ORM\OneToOne(targetEntity=Panier::class, mappedBy="client", cascade={"persist", "remove"})
     */
    private $panier2;

    /**
     * @ORM\ManyToMany(targetEntity=Cleat::class, mappedBy="user")
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

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->pseudo;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->pseudo;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    public function getPanier2(): ?Panier
    {
        return $this->panier2;
    }

    public function setPanier2(?Panier $panier2): self
    {
        // unset the owning side of the relation if necessary
        if ($panier2 === null && $this->panier2 !== null) {
            $this->panier2->setClient(null);
        }

        // set the owning side of the relation if necessary
        if ($panier2 !== null && $panier2->getClient() !== $this) {
            $panier2->setClient($this);
        }

        $this->panier2 = $panier2;

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
            $cleat->addUser($this);
        }

        return $this;
    }

    public function removeCleat(Cleat $cleat): self
    {
        if ($this->cleats->removeElement($cleat)) {
            $cleat->removeUser($this);
        }

        return $this;
    }
}
