<?php

namespace Pidev\SoukelmedinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCat
 *
 * @ORM\Table(name="sous_cat")
 * @ORM\Entity
 */
class SousCat
{
    /**
     * @return int
     */
    public function getIdSc()
    {
        return $this->idSc;
    }

    /**
     * @param int $idSc
     */
    public function setIdSc($idSc)
    {
        $this->idSc = $idSc;
    }

    /**
     * @return string
     */
    public function getNomSc()
    {
        return $this->nomSc;
    }

    /**
     * @param string $nomSc
     */
    public function setNomSc($nomSc)
    {
        $this->nomSc = $nomSc;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSc;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_sc", type="string", length=50, nullable=false)
     */
    private $nomSc;


}

