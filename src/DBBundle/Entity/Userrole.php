<?php

namespace DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CommonBundle\Doctrine\ORM\Behaviours\BlameableTrait;
use CommonBundle\Doctrine\ORM\Behaviours\TimestampableTrait;

/**
 * Userrole
 *
 * @ORM\Table(name="userrole")
 * @ORM\Entity(repositoryClass="DBBundle\Repository\UserroleRepository")
 */
class Userrole
{
    const ID = 'id';
    const NAME = 'name';
    const STATUS = 'status';
    use TimestampableTrait,BlameableTrait;
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=10, nullable=true)
     */
    private $status;


    /**
     * @var integer
     *
     * @ORM\Column(name="Isdeleted", type="smallint", nullable=false)
     */
    private $isdeleted=0;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Userrole
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
     * Set description
     *
     * @param string $description
     *
     * @return Userrole
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

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
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return Userrole
     */
    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * Get isdeleted
     *
     * @return integer
     */
    public function getIsdeleted()
    {
        return $this->isdeleted;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Userrole
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
