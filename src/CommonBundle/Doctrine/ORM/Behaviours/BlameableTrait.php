<?php


namespace CommonBundle\Doctrine\ORM\Behaviours;

use Doctrine\ORM\Mapping as ORM;

trait BlameableTrait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CreatedBy", type="integer", nullable=false)
     */
    private $createdby=1;

    /**
     * @var integer
     *
     * @ORM\Column(name="ModifiedBy", type="integer", nullable=true)
     */
    private $modifiedby=1;

    /**
     * @return int
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * @param int $createdby
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    }

    /**
     * @return int
     */
    public function getModifiedby()
    {
        return $this->modifiedby;
    }

    /**
     * @param int $modifiedby
     */
    public function setModifiedby($modifiedby)
    {
        $this->modifiedby = $modifiedby;
    }
}