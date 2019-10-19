<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProprietaireTerrienRepository")
 */
class ProprietaireTerrien
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\site")
     * @ORM\JoinColumn(nullable=false)
     */
    private $site;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $propritaire;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_concession;

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

    public function getSite(): ?site
    {
        return $this->site;
    }

    public function setSite(?site $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getPropritaire(): ?user
    {
        return $this->propritaire;
    }

    public function setPropritaire(?user $propritaire): self
    {
        $this->propritaire = $propritaire;

        return $this;
    }

    public function getDateConcession(): ?\DateTimeInterface
    {
        return $this->date_concession;
    }

    public function setDateConcession(?\DateTimeInterface $date_concession): self
    {
        $this->date_concession = $date_concession;

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
