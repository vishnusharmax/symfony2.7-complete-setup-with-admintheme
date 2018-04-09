<?php

namespace CommonBundle\Doctrine\ORM\Behaviours;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TimestampableTrait
 * @ORM\HasLifecycleCallbacks()
 */
trait TimestampableTrait
{
    public function __construct()
    {
        $this->datecreated= new \DateTime();
        $this->datemodified= new \DateTime();
    }

    /**
     * @var \DateTime
     * @ORM\Column(name="DateCreated", type="datetime", nullable=false)
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModified", type="datetime", nullable=true)
     */
    private $datemodified;

    /**
     * @return \DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * @param \DateTime $datecreated
     * @ORM\PrePersist()
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = new \DateTime();
    }

    /**
     * @return \DateTime
     */
    public function getDatemodified()
    {
        return $this->datemodified;
    }

    /**
     * @param \DateTime $datemodified
     * @ORM\PreUpdate()
     */
    public function setDatemodified($datemodified)
    {
        $this->datemodified = new \DateTime();
    }
}