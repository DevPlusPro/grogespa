<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteRepository")
 */
class Site
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $dimension;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\quartier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quartier;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AgenceImmobiliere")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agence_imobiliere;

    /**
     * @ORM\Column(type="integer")
     */
    private $published;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $added_by;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbre_lot;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbre_ilot;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ModePayement", inversedBy="sites")
     * @ORM\JoinTable(name="site_mode_payement")
     */
    private $mode_payements;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $updated_by;

    public function __construct()
    {
        $this->mode_payements = new ArrayCollection();
    }


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

    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getQuartier(): ?quartier
    {
        return $this->quartier;
    }

    public function setQuartier(?quartier $quartier): self
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getAgenceImobiliere(): ?AgenceImmobiliere
    {
        return $this->agence_imobiliere;
    }

    public function setAgenceImobiliere(?AgenceImmobiliere $agence_imobiliere): self
    {
        $this->agence_imobiliere = $agence_imobiliere;

        return $this;
    }


    public function getPublished(): ?int
    {
        return $this->published;
    }

    public function setPublished(int $published): self
    {
        $this->published = $published;

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

    public function getNbreLot(): ?int
    {
        return $this->nbre_lot;
    }

    public function setNbreLot(?int $nbre_lot): self
    {
        $this->nbre_lot = $nbre_lot;

        return $this;
    }

    public function getNbreIlot(): ?int
    {
        return $this->nbre_ilot;
    }

    public function setNbreIlot(?int $nbre_ilot): self
    {
        $this->nbre_ilot = $nbre_ilot;

        return $this;
    }

    /**
     * @return Collection|ModePayement[]
     */
    public function getModePayements(): Collection
    {
        return $this->mode_payements;
    }

    public function addModePayement(ModePayement $modePayement): self
    {
        if (!$this->mode_payements->contains($modePayement)) {
            $this->mode_payements[] = $modePayement;
        }

        return $this;
    }

    public function removeModePayement(ModePayement $modePayement): self
    {
        if ($this->mode_payements->contains($modePayement)) {
            $this->mode_payements->removeElement($modePayement);
        }

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
