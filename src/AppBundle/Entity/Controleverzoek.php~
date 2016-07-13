<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Controleverzoek
 */
class Controleverzoek
{
    protected $controles;

    public function __construct() {
        $this->controles = new ArrayCollection();
    }

    /**
     * @return Collection
     */
    public function getControles() {
        return $this->controles;
    }

    /**
     * set Collection
     */
    public function setControles(ArrayCollection $controles) {
        $this->controles = $controles;
    }

    public function __toString()
    {
        return $this->getTijdstipVerzoek()->format('d-m-Y  H:i:s');
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Opdracht
     */
    private $opdracht;

    /**
     * @var \AppBundle\Entity\Werknemer
     */
    private $werknemer;


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
     * Set opdracht
     *
     * @param \AppBundle\Entity\Opdracht $opdracht
     * @return Controleverzoek
     */
    public function setOpdracht(\AppBundle\Entity\Opdracht $opdracht = null)
    {
        $this->opdracht = $opdracht;

        return $this;
    }

    /**
     * Get opdracht
     *
     * @return \AppBundle\Entity\Opdracht 
     */
    public function getOpdracht()
    {
        return $this->opdracht;
    }

    /**
     * Set werknemer
     *
     * @param \AppBundle\Entity\Werknemer $werknemer
     * @return Controleverzoek
     */
    public function setWerknemer(\AppBundle\Entity\Werknemer $werknemer = null)
    {
        $this->werknemer = $werknemer;

        return $this;
    }

    /**
     * Get werknemer
     *
     * @return \AppBundle\Entity\Werknemer 
     */
    public function getWerknemer()
    {
        return $this->werknemer;
    }
    /**
     * @var \AppBundle\Entity\Controleverzoektype
     */
    private $controleverzoektype;

    /**
     * Set controleverzoektype
     *
     * @param \AppBundle\Entity\Controleverzoektype $controleverzoektype
     * @return Controleverzoek
     */
    public function setControleverzoektype(\AppBundle\Entity\Controleverzoektype $controleverzoektype = null)
    {
        $this->controleverzoektype = $controleverzoektype;

        return $this;
    }

    /**
     * Get controleverzoektype
     *
     * @return \AppBundle\Entity\Controleverzoektype 
     */
    public function getControleverzoektype()
    {
        return $this->controleverzoektype;
    }
    /**
     * @var \DateTime
     */
    private $tijdstipVerzoek;


    /**
     * Set tijdstipVerzoek
     *
     * @param \DateTime $tijdstipVerzoek
     * @return Controleverzoek
     */
    public function setTijdstipVerzoek($tijdstipVerzoek)
    {
        $this->tijdstipVerzoek = $tijdstipVerzoek;

        return $this;
    }

    /**
     * Get tijdstipVerzoek
     *
     * @return \DateTime 
     */
    public function getTijdstipVerzoek()
    {
        return $this->tijdstipVerzoek;
    }
}
