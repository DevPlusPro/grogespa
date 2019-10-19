<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TerrainRepository")
 */
class Terrain
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $num_lot;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $num_ilot;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $dimension;

    /**
     * @ORM\Column(type="integer")
     */
    private $cout;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\site")
     * @ORM\JoinColumn(nullable=false)
     */
    private $site;

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

    public function getNumLot(): ?string
    {
        return $this->num_lot;
    }

    public function setNumLot(?string $num_lot): self
    {
        $this->num_lot = $num_lot;

        return $this;
    }

    public function getNumIlot(): ?string
    {
        return $this->num_ilot;
    }

    public function setNumIlot(?string $num_ilot): self
    {
        $this->num_ilot = $num_ilot;

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

    public function getCout(): ?int
    {
        return $this->cout;
    }

    public function setCout(int $cout): self
    {
        $this->cout = $cout;

        return $this;
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
