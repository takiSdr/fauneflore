<?php
/**
 * Created by PhpStorm.
 * User: tak
 * Date: 22/06/16
 * Time: 16:18
 */

namespace Ffk\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use FOS\UserBundle\Model\UserInterface;


/**
 * Class Comment
 * @package Ffk\CommentBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Ffk\CommentBundle\Entity\Thread")
     */
    protected $thread;


    /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="Ffk\UserBundle\Entity\User")
     * @var User
     */
    protected $author;

    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author of the Comment
     *
     * @param FOS\UserBundle\Model\UserInterface $author
     */
    public function setAuthor(UserInterface $author)
    {
       return $this->author=$author;
    }
    public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return 'Anonymous';
        }

        return $this->getAuthor()->getUsername();
    }
}