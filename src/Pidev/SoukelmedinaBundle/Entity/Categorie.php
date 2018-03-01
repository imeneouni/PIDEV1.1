<?php

namespace Pidev\SoukelmedinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cat", type="string", length=50, nullable=false)
     */

    private $nomCat;

    /**
     * @var string
     *
     * @ORM\Column(name="sous_cat", type="string", length=50, nullable=false)
     */
    private $sousCat;

    /**
     * @return int
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * @param int $idCat
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;
    }

    /**
     * @return string
     */
    public function getNomCat()
    {
        return $this->nomCat;
    }

    /**
     * @param string $nomCat
     */
    public function setNomCat($nomCat)
    {
        $this->nomCat = $nomCat;
    }

    /**
     * @return string
     */
    public function getSousCat()
    {
        return $this->sousCat;
    }

    /**
     * @param string $sousCat
     */
    public function setSousCat($sousCat)
    {
        $this->sousCat = $sousCat;
    }


}

