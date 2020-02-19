<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivreRepository")
 */
class Livre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3, minMessage="Minimum 3 caractères")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=300)
     * @Assert\Url(message="L'URL est invalide")
     */
    private $couverture;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3, minMessage="Minimum 3 caractères")
     */
    private $auteur;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     * min=0.01,
     * max=5000,
     * minMessage="minimum 0.01€",
     * maxMessage="minimum 5000"
     * )
     * @Assert\Length(min=1, minMessage="Ce champ ne doit pas être vide")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, minMessage="Minimum 2 caractères")
     * 
     */
    private $genre;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=100, minMessage="Minimum 100 caractères")
     */
    private $resume;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCouverture(): ?string
    {
        return $this->couverture;
    }

    public function setCouverture(string $couverture): self
    {
        $this->couverture = $couverture;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }
}
