<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\ExecutionContext;
/**
 * Controle
 */
class Controle
{
    /**
     * Validates my entity and throw violations
     */
    public function validateControleEntity(ExecutionContext $context)
    {
        $opm = $this->getOpmerkingen();

        if ($opm == 'geen') {
            $context->addViolation("'Opmerkingen' can\'t be geen.");
        }
    }

    public function __toString()
    {
        $s = '';
        if ($this->getControleverzoek()) {
            $s.= 'verzoek: ' . $this->getControleverzoek()->__toString();
        }
        if ($this->getTijdstipBezoek()){
            $s .= $this->getTijdstipBezoek()->format('d-m-Y  H:i:s');
        }
        return $s == null ? null : $s ;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $tijdstipBezoek;

    /**
     * @var string
     */
    private $opmerkingen;

    /**
     * @var boolean
     */
    private $facturabel;

    /**
     * @var \AppBundle\Entity\Controleverzoek
     */
    private $controleverzoek;

    /**
     * @var \AppBundle\Entity\Controleur
     */
    private $controleur;


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
     * Set tijdstipBezoek
     *
     * @param \DateTime $tijdstipBezoek
     * @return Controle
     */
    public function setTijdstipBezoek($tijdstipBezoek)
    {
        $this->tijdstipBezoek = $tijdstipBezoek;

        return $this;
    }

    /**
     * Get tijdstipBezoek
     *
     * @return \DateTime 
     */
    public function getTijdstipBezoek()
    {
        return $this->tijdstipBezoek;
    }

    /**
     * Set opmerkingen
     *
     * @param string $opmerkingen
     * @return Controle
     */
    public function setOpmerkingen($opmerkingen)
    {
        $this->opmerkingen = $opmerkingen;

        return $this;
    }

    /**
     * Get opmerkingen
     *
     * @return string 
     */
    public function getOpmerkingen()
    {
        return $this->opmerkingen;
    }

    /**
     * Set facturabel
     *
     * @param boolean $facturabel
     * @return Controle
     */
    public function setFacturabel($facturabel)
    {
        $this->facturabel = $facturabel;

        return $this;
    }

    /**
     * Get facturabel
     *
     * @return boolean 
     */
    public function getFacturabel()
    {
        return $this->facturabel;
    }

    /**
     * Set controleverzoek
     *
     * @param \AppBundle\Entity\Controleverzoek $controleverzoek
     * @return Controle
     */
    public function setControleverzoek(\AppBundle\Entity\Controleverzoek $controleverzoek = null)
    {
        $this->controleverzoek = $controleverzoek;

        return $this;
    }



    /**
     * Get controleverzoek
     *
     * @return \AppBundle\Entity\Controleverzoek 
     */
    public function getControleverzoek()
    {
        return $this->controleverzoek;
    }

    /**
     * Set controleur
     *
     * @param \AppBundle\Entity\Controleur $controleur
     * @return Controle
     */
    public function setControleur(\AppBundle\Entity\Controleur $controleur = null)
    {
        $this->controleur = $controleur;

        return $this;
    }

    /**
     * Get controleur
     *
     * @return \AppBundle\Entity\Controleur 
     */
    public function getControleur()
    {
        return $this->controleur;
    }
}
