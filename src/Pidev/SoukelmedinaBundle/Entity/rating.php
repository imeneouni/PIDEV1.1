<?php

namespace Pidev\SoukelmedinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="Pidev\SoukelmedinaBundle\Repository\ratingRepository")
 */
class rating
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    //private $id;


    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $rating;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Pidev\SoukelmedinaBundle\Entity\Produit", inversedBy="ratings")
     * @ORM\JoinColumn(name="produit",referencedColumnName="id_produit")
     */
    private $produit;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Pidev\SoukelmedinaBundle\Entity\User")
     * @ORM\JoinColumn(name="user",referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="text", nullable=true)
     */
    private $avis;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * @param string $avis
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;
    }



}

