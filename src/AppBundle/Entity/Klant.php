<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Klant
 */
class Klant
{
    private $werknemers; // inversedby

    public function __construct()
    {
        $this->werknemers = new ArrayCollection();
    }

    public function getWerknemers()
    {
        return $this->werknemers;
    }

    public function setWerknemers(ArrayCollection $werknemers )
    {
        $this->werknemers  = $werknemers ;

        return $this;
    }

    /**
     * Add Werknemer
     *
     * @param Werknemer $werknemer
     * @return Werknemer
     */
    public function addWerknemer (Werknemer $werknemer )
    {
        $this->werknemers[] = $werknemer;
        return $this;
    }

    /**
     * Remove Werknemer
     *
     * @param Werknemer $werknemer
     */
    public function removeWerknemer(Werknemer $werknemer)
    {
        if ($this->werknemers->contains($werknemer)) {
            $this->werknemers->removeElement($werknemer);
        }
        $werknemer->setKlant(null);
        return $this;
    }

    public function __toString()
    {
        $s = $this->getKlantNaam() ? $this->getKlantNaam() : '';
        return $s;
    }

    /**
     * @var string
     */
    private $klantNaam;

    /**
     * @var string
     */
    private $bedrijfNaam;

    /**
     * @var string
     */
    private $bedrijfAdres;

    /**
     * @var string
     */
    private $bedrijfPostcode;

    /**
     * @var string
     */
    private $bedrijfPlaats;

    /**
     * @var string
     */
    private $bedrijfEmailAdres;

    /**
     * @var string
     */
    private $priveAdres;

    /**
     * @var string
     */
    private $privePostcode;

    /**
     * @var string
     */
    private $privePlaats;

    /**
     * @var string
     */
    private $priveEmailAdres;

    /**
     * @var boolean
     */
    private $actief = true;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set klantNaam
     *
     * @param string $klantNaam
     *
     * @return Klant
     */
    public function setKlantNaam($klantNaam)
    {
        $this->klantNaam = $klantNaam;

        return $this;
    }

    /**
     * Get klantNaam
     *
     * @return string
     */
    public function getKlantNaam()
    {
        return $this->klantNaam;
    }

    /**
     * Set bedrijfNaam
     *
     * @param string $bedrijfNaam
     *
     * @return Klant
     */
    public function setBedrijfNaam($bedrijfNaam)
    {
        $this->bedrijfNaam = $bedrijfNaam;

        return $this;
    }

    /**
     * Get bedrijfNaam
     *
     * @return string
     */
    public function getBedrijfNaam()
    {
        return $this->bedrijfNaam;
    }

    /**
     * Set bedrijfAdres
     *
     * @param string $bedrijfAdres
     *
     * @return Klant
     */
    public function setBedrijfAdres($bedrijfAdres)
    {
        $this->bedrijfAdres = $bedrijfAdres;

        return $this;
    }

    /**
     * Get bedrijfAdres
     *
     * @return string
     */
    public function getBedrijfAdres()
    {
        return $this->bedrijfAdres;
    }

    /**
     * Set bedrijfPostcode
     *
     * @param string $bedrijfPostcode
     *
     * @return Klant
     */
    public function setBedrijfPostcode($bedrijfPostcode)
    {
        $this->bedrijfPostcode = $bedrijfPostcode;

        return $this;
    }

    /**
     * Get bedrijfPostcode
     *
     * @return string
     */
    public function getBedrijfPostcode()
    {
        return $this->bedrijfPostcode;
    }

    /**
     * Set bedrijfPlaats
     *
     * @param string $bedrijfPlaats
     *
     * @return Klant
     */
    public function setBedrijfPlaats($bedrijfPlaats)
    {
        $this->bedrijfPlaats = $bedrijfPlaats;

        return $this;
    }

    /**
     * Get bedrijfPlaats
     *
     * @return string
     */
    public function getBedrijfPlaats()
    {
        return $this->bedrijfPlaats;
    }

    /**
     * Set bedrijfEmailAdres
     *
     * @param string $bedrijfEmailAdres
     *
     * @return Klant
     */
    public function setBedrijfEmailAdres($bedrijfEmailAdres)
    {
        $this->bedrijfEmailAdres = $bedrijfEmailAdres;

        return $this;
    }

    /**
     * Get bedrijfEmailAdres
     *
     * @return string
     */
    public function getBedrijfEmailAdres()
    {
        return $this->bedrijfEmailAdres;
    }

    /**
     * Set priveAdres
     *
     * @param string $priveAdres
     *
     * @return Klant
     */
    public function setPriveAdres($priveAdres)
    {
        $this->priveAdres = $priveAdres;

        return $this;
    }

    /**
     * Get priveAdres
     *
     * @return string
     */
    public function getPriveAdres()
    {
        return $this->priveAdres;
    }

    /**
     * Set privePostcode
     *
     * @param string $privePostcode
     *
     * @return Klant
     */
    public function setPrivePostcode($privePostcode)
    {
        $this->privePostcode = $privePostcode;

        return $this;
    }

    /**
     * Get privePostcode
     *
     * @return string
     */
    public function getPrivePostcode()
    {
        return $this->privePostcode;
    }

    /**
     * Set privePlaats
     *
     * @param string $privePlaats
     *
     * @return Klant
     */
    public function setPrivePlaats($privePlaats)
    {
        $this->privePlaats = $privePlaats;

        return $this;
    }

    /**
     * Get privePlaats
     *
     * @return string
     */
    public function getPrivePlaats()
    {
        return $this->privePlaats;
    }

    /**
     * Set priveEmailAdres
     *
     * @param string $priveEmailAdres
     *
     * @return Klant
     */
    public function setPriveEmailAdres($priveEmailAdres)
    {
        $this->priveEmailAdres = $priveEmailAdres;

        return $this;
    }

    /**
     * Get priveEmailAdres
     *
     * @return string
     */
    public function getPriveEmailAdres()
    {
        return $this->priveEmailAdres;
    }

    /**
     * Set actief
     *
     * @param boolean $actief
     *
     * @return Klant
     */
    public function setActief($actief)
    {
        $this->actief = $actief;

        return $this;
    }

    /**
     * Get actief
     *
     * @return boolean
     */
    public function getActief()
    {
        return $this->actief;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
