<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VersementRepository")
 */
class Versement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\terrain")
     * @ORM\JoinColumn(nullable=false)
     */
    private $terrain;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mode_payement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $added_by;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $updated_by;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?user
    {
        return $this->client;
    }

    public function setClient(?user $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getTerrain(): ?terrain
    {
        return $this->terrain;
    }

    public function setTerrain(?terrain $terrain): self
    {
        $this->terrain = $terrain;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getModePayement(): ?string
    {
        return $this->mode_payement;
    }

    public function setModePayement(string $mode_payement): self
    {
        $this->mode_payement = $mode_payement;

        return $this;
    }

    public function getAddedBy(): ?user
    {
        return $this->added_by;
    }

    public function setAddedBy(?user $added_by): self
    {
        $this->added_by = $added_by;

        return $this;
    }

    public function getUpdatedBy(): ?user
    {
        return $this->updated_by;
    }

    public function setUpdatedBy(?user $updated_by): self
    {
        $this->updated_by = $updated_by;

        return $this;
    }
}
