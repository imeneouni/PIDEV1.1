<?php

namespace Pidev\SoukelmedinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */

class Produit
{
    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @ORM\OneToMany(targetEntity="Pidev\SoukelmedinaBundle\Entity\rating", mappedBy="produit")
     */
    private $ratings;



    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * @param mixed $ratings
     */
    public function setRatings($ratings)
    {
        $this->ratings = $ratings;
    }

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $promotion;

    /**
     * @return mixed
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param mixed $promotion
     * @return Produit
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
        return $this;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stock_p", type="boolean")
     */
    private $stockP;



    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }





    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isStockP()
    {
        return $this->stockP;
    }

    /**
     * @param bool $stockP
     */
    public function setStockP($stockP)
    {
        $this->stockP = $stockP;
    }

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $rating;

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
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantite
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="quantité", type="integer", nullable=false)
     */
    private $quantity;

 /**
 * @ORM\ManyToOne(targetEntity="Pidev\SoukelmedinaBundle\Entity\Categorie")
 * @ORM\JoinColumn(name="categorie_id",referencedColumnName="id_cat")
 */
private $categorie;

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param string $datecreation
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;
    }
    /**
     * @var string
     * @ORM\Column(name="datecreation", type="date", nullable=false)
     */
    private $datecreation;
    /**
     * @var float
     *
     * @ORM\Column(name="prixprom", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixprom;

    /**
     * @return float
     */
    public function getPrixprom()
    {
        return $this->prixprom;
    }

    /**
     * @param float $prixprom
     */
    public function setPrixprom($prixprom)
    {
        $this->prixprom = $prixprom;
    }

    public function getPrixPromotion()
    {
        if($this->promotion)
            return $this->prix-($this->prix*$this->promotion/100);
        return $this->prix;
    }

    /**
     * Get stockP
     *
     * @return boolean
     */
    public function getStockP()
    {
        return $this->stockP;
    }
}
