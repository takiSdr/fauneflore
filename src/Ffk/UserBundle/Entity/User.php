<?php
/**
 * Created by PhpStorm.
 * User: tak
 * Date: 21/06/16
 * Time: 19:23
 */

namespace Ffk\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 * @package Ffk\UserBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fk_user")
 */
class User  extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", nullable=true, length=225)
     *
     */
    protected $firstName;


    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string",  nullable=true, length=225)
     */
    protected $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", nullable=true , type="datetime")
     */
    protected $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true , length=25)
     */
    protected $phone ;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Player
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Player
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return Player
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Player
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email){
        parent::setEmail($email);
        parent::setUsername($email);
        return $this;
    }



}