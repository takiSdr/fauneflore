<?php
/**
 * Created by PhpStorm.
 * User: tak
 * Date: 22/06/16
 * Time: 17:16
 */

namespace Ffk\CommentBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 *
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 *  @ORM\Table(name="thread")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;
}