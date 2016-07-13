<?php

namespace AppBundle\Entity;

/**
 * Werknemer
 */
class Werknemer
{
    public function __toString()
    {
        $s = $this->getNaam() ? $this->getNaam() : '';
        return $s;
    }

    /**
     * @var integer
     */
    private $klantId;

    /**
     * @var string
     */
    private $naam;

    /**
     * @var string
     */
    private $huisAdres;

    /**
     * @var string
     */
    private $huisPostcode;

    /**
     * @var string
     */
    private $huisPlaats;

    /**
     * @var boolean
     */
    private $huisAdresIsBezoekAdres;

    /**
     * @var string
     */
    private $bezoekAdres;

    /**
     * @var string
     */
    private $bezoekPostcode;

    /**
     * @var string
     */
    private $bezoekPlaats;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set klantId
     *
     * @param integer $klantId
     *
     * @return Werknemer
     */
    public function setKlantId($klantId)
    {
        $this->klantId = $klantId;

        return $this;
    }

    /**
     * Get klantId
     *
     * @return integer
     */
    public function getKlantId()
    {
        return $this->klantId;
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Werknemer
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set huisAdres
     *
     * @param string $huisAdres
     *
     * @return Werknemer
     */
    public function setHuisAdres($huisAdres)
    {
        $this->huisAdres = $huisAdres;

        return $this;
    }

    /**
     * Get huisAdres
     *
     * @return string
     */
    public function getHuisAdres()
    {
        return $this->huisAdres;
    }

    /**
     * Set huisPostcode
     *
     * @param string $huisPostcode
     *
     * @return Werknemer
     */
    public function setHuisPostcode($huisPostcode)
    {
        $this->huisPostcode = $huisPostcode;

        return $this;
    }

    /**
     * Get huisPostcode
     *
     * @return string
     */
    public function getHuisPostcode()
    {
        return $this->huisPostcode;
    }

    /**
     * Set huisPlaats
     *
     * @param string $huisPlaats
     *
     * @return Werknemer
     */
    public function setHuisPlaats($huisPlaats)
    {
        $this->huisPlaats = $huisPlaats;

        return $this;
    }

    /**
     * Get huisPlaats
     *
     * @return string
     */
    public function getHuisPlaats()
    {
        return $this->huisPlaats;
    }

    /**
     * Set huisAdresIsBezoekAdres
     *
     * @param boolean $huisAdresIsBezoekAdres
     *
     * @return Werknemer
     */
    public function setHuisAdresIsBezoekAdres($huisAdresIsBezoekAdres)
    {
        $this->huisAdresIsBezoekAdres = $huisAdresIsBezoekAdres;

        return $this;
    }

    /**
     * Get huisAdresIsBezoekAdres
     *
     * @return boolean
     */
    public function getHuisAdresIsBezoekAdres()
    {
        return $this->huisAdresIsBezoekAdres;
    }

    /**
     * Set bezoekAdres
     *
     * @param string $bezoekAdres
     *
     * @return Werknemer
     */
    public function setBezoekAdres($bezoekAdres)
    {
        $this->bezoekAdres = $bezoekAdres;

        return $this;
    }

    /**
     * Get bezoekAdres
     *
     * @return string
     */
    public function getBezoekAdres()
    {
        return $this->bezoekAdres;
    }

    /**
     * Set bezoekPostcode
     *
     * @param string $bezoekPostcode
     *
     * @return Werknemer
     */
    public function setBezoekPostcode($bezoekPostcode)
    {
        $this->bezoekPostcode = $bezoekPostcode;

        return $this;
    }

    /**
     * Get bezoekPostcode
     *
     * @return string
     */
    public function getBezoekPostcode()
    {
        return $this->bezoekPostcode;
    }

    /**
     * Set bezoekPlaats
     *
     * @param string $bezoekPlaats
     *
     * @return Werknemer
     */
    public function setBezoekPlaats($bezoekPlaats)
    {
        $this->bezoekPlaats = $bezoekPlaats;

        return $this;
    }

    /**
     * Get bezoekPlaats
     *
     * @return string
     */
    public function getBezoekPlaats()
    {
        return $this->bezoekPlaats;
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
    /**
     * @var \AppBundle\Entity\Klant
     */
    private $klant;


    /**
     * Set klant
     *
     * @param \AppBundle\Entity\Klant $klant
     * @return Werknemer
     */
    public function setKlant(\AppBundle\Entity\Klant $klant = null)
    {
        $this->klant = $klant;

        return $this;
    }

    /**
     * Get klant
     *
     * @return \AppBundle\Entity\Klant 
     */
    public function getKlant()
    {
        return $this->klant;
    }
}
