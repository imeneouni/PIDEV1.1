<?php
// src/AppBundle/Entity/User.php

namespace Pidev\SoukelmedinaBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     *
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     */
    protected $sexe;
    /**
     *
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     */
    protected $nom;
    /**
     *
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     */
    protected $prenom;
    /**
     *
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     */
    protected $adresse;


    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    /**
     *
     * @ORM\Column(type="string",length=255,nullable=true)
     *
     */
    protected $cin;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return User
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }
    /**
     *
     * @ORM\Column(type="date",nullable=true)
     *
     */
    protected $datedenaissance;

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     *
     * @return User
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }
}
