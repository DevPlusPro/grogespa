<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuartierRepository")
 */
class Quartier
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
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ville")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

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


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getVille(): ?ville
    {
        return $this->ville;
    }

    public function setVille(?ville $ville): self
    {
        $this->ville = $ville;

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
