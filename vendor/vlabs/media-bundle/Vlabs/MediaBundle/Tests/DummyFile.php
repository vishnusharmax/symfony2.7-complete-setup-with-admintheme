<?php

namespace Vlabs\MediaBundle\Tests;

use Vlabs\MediaBundle\Entity\BaseFile as VlabsFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vlabs\MediaBundle\Annotation\Vlabs;

/**
 * Vlabs\MediaBundle\Tests\DummyFile
 */
class DummyFile extends VlabsFile
{
    /**
     * @var string $path
     *
     * @Assert\Image()
     * @Vlabs\Cdn(base_url="dummy_host")
     */
    private $path;

    /**
     * Set path
     *
     * @param  string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

}
