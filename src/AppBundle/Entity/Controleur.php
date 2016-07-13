<?php

namespace AppBundle\Entity;

/**
 * Tcontroleur
 */
class Controleur
{
    public function __toString(){
        return '$' . $this->getNaam();
    }

    /**
     * @var string
     */
    private $naam;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $plaats;

    /**
     * @var string
     */
    private $emailAdres;

    /**
     * @var boolean
     */
    private $actief = true;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Tcontroleur
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
     * Set adres
     *
     * @param string $adres
     *
     * @return Tcontroleur
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Tcontroleur
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set plaats
     *
     * @param string $plaats
     *
     * @return Tcontroleur
     */
    public function setPlaats($plaats)
    {
        $this->plaats = $plaats;

        return $this;
    }

    /**
     * Get plaats
     *
     * @return string
     */
    public function getPlaats()
    {
        return $this->plaats;
    }

    /**
     * Set emailAdres
     *
     * @param string $emailAdres
     *
     * @return Tcontroleur
     */
    public function setEmailAdres($emailAdres)
    {
        $this->emailAdres = $emailAdres;

        return $this;
    }

    /**
     * Get emailAdres
     *
     * @return string
     */
    public function getEmailAdres()
    {
        return $this->emailAdres;
    }

    /**
     * Set actief
     *
     * @param boolean $actief
     *
     * @return Tcontroleur
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
