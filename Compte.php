<?php

class Compte
{
    private $solde;
    private $code;
    public $owner;

    /**
     * Get the value of Solde
     *
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of Solde
     *
     * @param mixed solde
     *
     * @return self
     */
    public function setSolde($solde)
    {
        if(is_numeric($solde))
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of Code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     *
     * @param mixed code
     *
     * @return self
     */
    public function setCode($code)
    {
        if(is_numeric($code))
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of Owner
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of Owner
     *
     * @param mixed owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /*Constructor*/
    public function __construct($solde=0, $code, $owner)
    {
        $this->setSolde($solde);
        $this->setCode($code);
        $this->setOwner($owner);
    }

    public function Resumer()
    {
        $display = "<p>Voici les infos du compte de " . $this->owner->getPrenom() . " :</p>";
        $display .= "<p>CIN: " . $this->owner->getCIN() . "</p>";
        $display .= "<p>Solde: " . $this->solde . "</p>";

        echo $display;
    }
    /*
    public function Crediter($euros)
    {
        if(is_numeric($euros))
        $this->solde += $euros;
    }

    public function Debiter($euros)
    {
        if(is_numeric($euros))
        $this->solde -= $euros;
    }
    */

    public function Crediter($euros, $autreCompte)
    {
        if(is_numeric($euros))
        $this->solde += $euros;
        $autreCompte::getSolde();
    }
}

?>
