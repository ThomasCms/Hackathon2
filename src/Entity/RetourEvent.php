<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RetourEventRepository")
 */
class RetourEvent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie_evenement;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $explication_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_inscrits_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $presents_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_startup_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_partenaire_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_externes_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_pme_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_porteur_projet_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $liens_formulaires_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $suggestion_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $taux_satisfaction_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origine_participation_evenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_mail_invitation_evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvenement(): ?int
    {
        return $this->id_evenement;
    }

    public function setIdEvenement(int $id_evenement): self
    {
        $this->id_evenement = $id_evenement;

        return $this;
    }

    public function getCategorieEvenement(): ?string
    {
        return $this->categorie_evenement;
    }

    public function setCategorieEvenement(string $categorie_evenement): self
    {
        $this->categorie_evenement = $categorie_evenement;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->date_evenement;
    }

    public function setDateEvenement(\DateTimeInterface $date_evenement): self
    {
        $this->date_evenement = $date_evenement;

        return $this;
    }

    public function getExplicationEvenement(): ?string
    {
        return $this->explication_evenement;
    }

    public function setExplicationEvenement(string $explication_evenement): self
    {
        $this->explication_evenement = $explication_evenement;

        return $this;
    }

    public function getNbreInscritsEvenement(): ?int
    {
        return $this->nbre_inscrits_evenement;
    }

    public function setNbreInscritsEvenement(int $nbre_inscrits_evenement): self
    {
        $this->nbre_inscrits_evenement = $nbre_inscrits_evenement;

        return $this;
    }

    public function getPresentsEvenement(): ?int
    {
        return $this->presents_evenement;
    }

    public function setPresentsEvenement(int $presents_evenement): self
    {
        $this->presents_evenement = $presents_evenement;

        return $this;
    }

    public function getNbreStartupEvenement(): ?int
    {
        return $this->nbre_startup_evenement;
    }

    public function setNbreStartupEvenement(int $nbre_startup_evenement): self
    {
        $this->nbre_startup_evenement = $nbre_startup_evenement;

        return $this;
    }

    public function getNbrePartenaireEvenement(): ?int
    {
        return $this->nbre_partenaire_evenement;
    }

    public function setNbrePartenaireEvenement(int $nbre_partenaire_evenement): self
    {
        $this->nbre_partenaire_evenement = $nbre_partenaire_evenement;

        return $this;
    }

    public function getNbreExternesEvenement(): ?int
    {
        return $this->nbre_externes_evenement;
    }

    public function setNbreExternesEvenement(int $nbre_externes_evenement): self
    {
        $this->nbre_externes_evenement = $nbre_externes_evenement;

        return $this;
    }

    public function getNbrePmeEvenement(): ?int
    {
        return $this->nbre_pme_evenement;
    }

    public function setNbrePmeEvenement(int $nbre_pme_evenement): self
    {
        $this->nbre_pme_evenement = $nbre_pme_evenement;

        return $this;
    }

    public function getNbrePorteurProjetEvenement(): ?int
    {
        return $this->nbre_porteur_projet_evenement;
    }

    public function setNbrePorteurProjetEvenement(int $nbre_porteur_projet_evenement): self
    {
        $this->nbre_porteur_projet_evenement = $nbre_porteur_projet_evenement;

        return $this;
    }

    public function getResultatEvenement(): ?string
    {
        return $this->resultat_evenement;
    }

    public function setResultatEvenement(string $resultat_evenement): self
    {
        $this->resultat_evenement = $resultat_evenement;

        return $this;
    }

    public function getLiensFormulairesEvenement(): ?string
    {
        return $this->liens_formulaires_evenement;
    }

    public function setLiensFormulairesEvenement(string $liens_formulaires_evenement): self
    {
        $this->liens_formulaires_evenement = $liens_formulaires_evenement;

        return $this;
    }

    public function getSuggestionEvenement(): ?string
    {
        return $this->suggestion_evenement;
    }

    public function setSuggestionEvenement(string $suggestion_evenement): self
    {
        $this->suggestion_evenement = $suggestion_evenement;

        return $this;
    }

    public function getTauxSatisfactionEvenement(): ?int
    {
        return $this->taux_satisfaction_evenement;
    }

    public function setTauxSatisfactionEvenement(int $taux_satisfaction_evenement): self
    {
        $this->taux_satisfaction_evenement = $taux_satisfaction_evenement;

        return $this;
    }

    public function getOrigineParticipationEvenement(): ?string
    {
        return $this->origine_participation_evenement;
    }

    public function setOrigineParticipationEvenement(string $origine_participation_evenement): self
    {
        $this->origine_participation_evenement = $origine_participation_evenement;

        return $this;
    }

    public function getNbreMailInvitationEvenement(): ?int
    {
        return $this->nbre_mail_invitation_evenement;
    }

    public function setNbreMailInvitationEvenement(int $nbre_mail_invitation_evenement): self
    {
        $this->nbre_mail_invitation_evenement = $nbre_mail_invitation_evenement;

        return $this;
    }
}
