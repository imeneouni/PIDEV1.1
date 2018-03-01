<?php

namespace Pidev\SoukelmedinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Like
 *
 * @ORM\Table(name="like", indexes={@ORM\Index(name="id_user", columns={"id_user", "id_post"}), @ORM\Index(name="id_post", columns={"id_post"}), @ORM\Index(name="IDX_AC6340B36B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class Like
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_like", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLike;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_like", type="integer", nullable=false)
     */
    private $nbrLike;

    /**
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;

    /**
     * @return int
     */
    public function getIdLike()
    {
        return $this->idLike;
    }

    /**
     * @param int $idLike
     */
    public function setIdLike($idLike)
    {
        $this->idLike = $idLike;
    }

    /**
     * @return int
     */
    public function getNbrLike()
    {
        return $this->nbrLike;
    }

    /**
     * @param int $nbrLike
     */
    public function setNbrLike($nbrLike)
    {
        $this->nbrLike = $nbrLike;
    }

    /**
     * @return \Post
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * @param \Post $idPost
     */
    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;
    }

    /**
     * @return \User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param \User $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}

