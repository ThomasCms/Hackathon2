<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestSatRepository")
 */
class QuestSat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origine;

    /**
     * @ORM\Column(type="integer")
     */
    private $satisfaction;

    /**
     * @ORM\Column(type="integer")
     */
    private $prospect;

    /**
     * @ORM\Column(type="integer")
     */
    private $contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $recruter;

    /**
     * @ORM\Column(type="integer")
     */
    private $investisseur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $suggestion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getSatisfaction(): ?int
    {
        return $this->satisfaction;
    }

    public function setSatisfaction(int $satisfaction): self
    {
        $this->satisfaction = $satisfaction;

        return $this;
    }

    public function getProspect(): ?int
    {
        return $this->prospect;
    }

    public function setProspect(int $prospect): self
    {
        $this->prospect = $prospect;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getRecruter(): ?int
    {
        return $this->recruter;
    }

    public function setRecruter(int $recruter): self
    {
        $this->recruter = $recruter;

        return $this;
    }

    public function getInvestisseur(): ?int
    {
        return $this->investisseur;
    }

    public function setInvestisseur(int $investisseur): self
    {
        $this->investisseur = $investisseur;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getSuggestion(): ?string
    {
        return $this->suggestion;
    }

    public function setSuggestion(?string $suggestion): self
    {
        $this->suggestion = $suggestion;

        return $this;
    }
}
