<?php

class Client
{
    private $CIN;
    private $nom;
    private $prenom;
    private $tel;

    /**
     * Get the value of CIN
     *
     * @return mixed
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set the value of CIN
     *
     * @param mixed CIN
     *
     * @return self
     */
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;

        return $this;
    }

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @param mixed prenom
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of Tel
     *
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of Tel
     *
     * @param mixed tel
     *
     * @return self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /*Constructors*/
    /*public function __construct($CIN = 0, $nom = '', $prenom = '', $tel = 0)
    {
        $this->setCIN($CIN);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setTel($tel);
    }*/

    public function __construct($CIN, $prenom, $nom, $tel = 0)
    {
        $this->setCIN($CIN);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setTel($tel);
    }

    public function Afficher()
    {
        $display = "<p>CIN: " . $this->CIN . "</p>";
        $display .= "<p>Nom: " . $this->nom . "</p>";
        $display .= "<p>Prénom: " . $this->prenom . "</p>";
        $display .= "<p>Téléphone: " . $this->tel . "</p>";

        echo $display;
    }

}

?>
