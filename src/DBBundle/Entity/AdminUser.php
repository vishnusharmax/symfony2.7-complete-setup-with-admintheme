<?php

namespace DBBundle\Entity;

use CommonBundle\Helpers\DateHelper;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vlabs\MediaBundle\Annotation\Vlabs;
use CommonBundle\Doctrine\ORM\Behaviours\BlameableTrait;
use CommonBundle\Doctrine\ORM\Behaviours\TimestampableTrait;

/**
 * User
 * @ORM\Entity(repositoryClass="DBBundle\Repository\AdminUserRepository")
 * @ORM\Table(name="adminuser", uniqueConstraints={@ORM\UniqueConstraint(name="Email", columns={"Email"})})
 * @ORM\HasLifecycleCallbacks()
 */
class AdminUser
{
    const ID = 'id';
    const NAME = 'name';
    const EMAIL = 'email';
    const STATUS = 'status';
    const MOBILE = 'mobile';
    use TimestampableTrait,BlameableTrait;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=250, nullable=false)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=10, nullable=true)
     */
    private $status;
    /**
     * @var string
     *
     * @ORM\Column(name="Mobile", type="string", length=250, nullable=false)
     */
    private $mobile;
    /**
     * @var VlabsFile
     *
     * @ORM\OneToOne(targetEntity="DBBundle\Entity\Image", cascade={"persist", "remove"}, orphanRemoval=true))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Image", referencedColumnName="id")
     * })
     *
     * @Vlabs\Media(identifier="image_entity", upload_dir="Userprofile")
     * @Assert\Valid()
     */
    private $image;
    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=250, nullable=false)
     */
//    private $password;
    private $password='e10adc3949ba59abbe56e057f20f883e';
    /**
     * @var \DBBundle\Entity\Userrole
     *
     * @ORM\ManyToOne(targetEntity="DBBundle\Entity\Userrole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Userrole", referencedColumnName="id")
     * })
     */
    private $userrole;

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
     * Set name
     *
     * @param string $name
     * @return AdminUser
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
     * Set email
     *
     * @param string $email
     * @return AdminUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return AdminUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return AdminUser
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }



    /**
     * Set userrole
     *
     * @param \DBBundle\Entity\Userrole $userrole
     * @return AdminUser
     */
    public function setUserrole(\DBBundle\Entity\Userrole $userrole = null)
    {
        $this->userrole = $userrole;

        return $this;
    }

    /**
     * Get userrole
     *
     * @return \DBBundle\Entity\Userrole 
     */
    public function getUserrole()
    {
        return $this->userrole;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return AdminUser
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

    /**
     * Set image
     *
     * @param \DBBundle\Entity\Image $image
     *
     * @return AdminUser
     */
    public function setImage(\DBBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \DBBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
