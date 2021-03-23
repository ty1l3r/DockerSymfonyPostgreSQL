<?php

namespace App\Entity;

use App\Repository\NamesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NamesRepository::class)
 */
class Names
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
    private $enfants;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adultes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnfants(): ?string
    {
        return $this->enfants;
    }

    public function setEnfants(string $enfants): self
    {
        $this->enfants = $enfants;

        return $this;
    }

    public function getAdultes(): ?string
    {
        return $this->adultes;
    }

    public function setAdultes(string $adultes): self
    {
        $this->adultes = $adultes;

        return $this;
    }
}
