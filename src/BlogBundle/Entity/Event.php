<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="startdate", type="datetime")
     *
     */
    private $startdate;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @ORM\Column(name="token", type="string")
     */
    private $token;

    /**
     * @ORM\Column(name="is_distributed", type="boolean")
     */
    private $isDistributed;

    /**
     * @ORM\Column(name="shared_token", type="string")
     */
    private $sharedToken;


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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Event
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Event
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set isDistributed
     *
     * @param boolean $isDistributed
     *
     * @return Event
     */
    public function setIsDistributed($isDistributed)
    {
        $this->isDistributed = $isDistributed;

        return $this;
    }

    /**
     * Get isDistributed
     *
     * @return bool
     */
    public function getIsDistributed()
    {
        return $this->isDistributed;
    }

    /**
     * Set sharedToken
     *
     * @param string $sharedToken
     *
     * @return Event
     */
    public function setSharedToken($sharedToken)
    {
        $this->sharedToken = $sharedToken;

        return $this;
    }

    /**
     * Get sharedToken
     *
     * @return string
     */
    public function getSharedToken()
    {
        return $this->sharedToken;
    }
}

