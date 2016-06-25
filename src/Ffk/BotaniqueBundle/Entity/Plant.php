<?php
/**
 * Created by PhpStorm.
 * User: tak
 * Date: 22/06/16
 * Time: 00:44
 */

namespace Ffk\BotaniqueBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;

/**
 * Class Plant
 * @package Ffk\BotaniqueBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="plant")
 */
class Plant extends BaseMedia
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var
     */
    protected $comment;

    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $utilities;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}
