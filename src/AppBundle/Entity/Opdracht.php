<?php

namespace AppBundle\Entity;

/**
 * Opdracht
 */
class Opdracht
{

    public function label(){
        return $this->__toString();
    }


    public function __toString()
    {
        $s = $this->getOpdrachtDatum()->format("d-m-Y") . ' / ' . $this->getKlant()->__toString();
        return '$' . $s;
    }

    /**
     * @var \DateTime
     */
    private $opdrachtDatum;

    /**
     * @var boolean
     */
    private $akkoordMetAlgemeneVoorwaarden;

    /**
     * @var boolean
     */
    private $akkoordVoorOpdracht;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Klant
     */
    private $klant;


    /**
     * Set opdrachtDatum
     *
     * @param \DateTime $opdrachtDatum
     *
     * @return Opdracht
     */
    public function setOpdrachtDatum($opdrachtDatum)
    {
        $this->opdrachtDatum = $opdrachtDatum;

        return $this;
    }

    /**
     * Get opdrachtDatum
     *
     * @return \DateTime
     */
    public function getOpdrachtDatum()
    {
        return $this->opdrachtDatum;
    }

    /**
     * Set akkoordMetAlgemeneVoorwaarden
     *
     * @param boolean $akkoordMetAlgemeneVoorwaarden
     *
     * @return Opdracht
     */
    public function setAkkoordMetAlgemeneVoorwaarden($akkoordMetAlgemeneVoorwaarden)
    {
        $this->akkoordMetAlgemeneVoorwaarden = $akkoordMetAlgemeneVoorwaarden;

        return $this;
    }

    /**
     * Get akkoordMetAlgemeneVoorwaarden
     *
     * @return boolean
     */
    public function getAkkoordMetAlgemeneVoorwaarden()
    {
        return $this->akkoordMetAlgemeneVoorwaarden;
    }

    /**
     * Set akkoordVoorOpdracht
     *
     * @param boolean $akkoordVoorOpdracht
     *
     * @return Opdracht
     */
    public function setAkkoordVoorOpdracht($akkoordVoorOpdracht)
    {
        $this->akkoordVoorOpdracht = $akkoordVoorOpdracht;

        return $this;
    }

    /**
     * Get akkoordVoorOpdracht
     *
     * @return boolean
     */
    public function getAkkoordVoorOpdracht()
    {
        return $this->akkoordVoorOpdracht;
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
     * Set klant
     *
     * @param \AppBundle\Entity\Klant $klant
     *
     * @return Opdracht
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
