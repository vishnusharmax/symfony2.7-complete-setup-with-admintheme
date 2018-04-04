<?php
/*
 * Trackometic Vehicle Tracking Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Deepak sinha <deepak@inflectica.com>
 *
 * This code is proprietary code of Trackometic.
 * Any Modification or Reproduction to the existing code
 * needs to have permission from the Inflectica.
 */

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