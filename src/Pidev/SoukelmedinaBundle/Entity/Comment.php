<?php

namespace Pidev\SoukelmedinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="id_user", columns={"id_user", "id_post"}), @ORM\Index(name="id_post", columns={"id_post"}), @ORM\Index(name="IDX_9474526C6B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_msg", type="integer", nullable=true)
     */
    private $nbrMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="msg", type="string", length=250, nullable=false)
     */
    private $msg;

    /**
     * @return int
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * @param int $idComment
     */
    public function setIdComment($idComment)
    {
        $this->idComment = $idComment;
    }

    /**
     * @return int
     */
    public function getNbrMsg()
    {
        return $this->nbrMsg;
    }

    /**
     * @param int $nbrMsg
     */
    public function setNbrMsg($nbrMsg)
    {
        $this->nbrMsg = $nbrMsg;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
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
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;

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

