<?php

namespace DBBundle\Entity;

use CommonBundle\Helpers\DateHelper;
use Doctrine\ORM\Mapping as ORM;
use CommonBundle\Doctrine\ORM\Behaviours\BlameableTrait;
use CommonBundle\Doctrine\ORM\Behaviours\TimestampableTrait;
/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DBBundle\Repository\UsersRepository")
 */
class Users
{
    use TimestampableTrait,BlameableTrait;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Firstname", type="string", length=50, nullable=true)
     */
    private $firstname;
    /**
     * @var string
     *
     * @ORM\Column(name="Lastname", type="string", length=50, nullable=true)
     */
    private $lastname;
    /**
     * @var string
     *
     * @ORM\Column(name="Middlename", type="string", length=50, nullable=true)
     */
    private $middlename;
    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=100, nullable=true)
     */
    private $password;
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="Mobile", type="string", length=150, nullable=true)
     */
    private $mobile;
    /**
     * @var string
     *
     * @ORM\Column(name="Devicetoken", type="string", length=200, nullable=true)
     */
    private $devicetoken;
    /**
     * @var string
     *
     * @ORM\Column(name="Latitude", type="string", length=30, nullable=true)
     */
    private $latitude;
    /**
     * @var string
     *
     * @ORM\Column(name="Longitude", type="string", length=30, nullable=true)
     */
    private $longitude;
    /**
     * @var string
     *
     * @ORM\Column(name="Devicetype", type="string", length=40, nullable=true)
     */
    private $devicetype;
    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=10, nullable=true)
     */
    private $status;
    /**
     * @var \DBBundle\Entity\Userrole
     * @ORM\ManyToOne(targetEntity="DBBundle\Entity\Userrole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserLoginModeID", referencedColumnName="id")
     * })
     */
    private $userloginmodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="Profileimage", type="string", length=300, nullable=true)
     */
    private $profileimage;

    /**
     * @var string
     *
     * @ORM\Column(name="Vpid", type="string", length=300, nullable=true)
     */
    private $vpid;
    /**
     * @var \DateTime
     * @ORM\Column(name="Dob", type="date", nullable=true)
     */
    private $dob;
    /**
     * @var float
     *
     * @ORM\Column(name="Mycredit", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mycredit;

    public static function convertObjectToArray(Users $user)
    {
        if ($user->getId() > 0) {
            return array(
                'Id' => $user->getId(),
                'Firstname' => $user->getFirstname() ? $user->getFirstname() : '',
                'Lastname' => $user->getLastname() ? $user->getLastname() : '',
                'Middlename' => $user->getMiddlename() ? $user->getMiddlename() : '',
                'Mobile' => $user->getMobile() ? base64_encode($user->getMobile()) : '',
                'Email' => $user->getEmail() ? base64_encode($user->getEmail()) : '',
                'Dob' => $user->getDob() ? DateHelper::GetFormattedDate($user->getDob()) : '',
                'Profileimage' => $user->getProfileimage() ? $user->getProfileimage() : '',
                'Latitude' => $user->getLatitude() ? $user->getLatitude() : '',
                'Longitude' => $user->getLongitude() ? $user->getLongitude() : '',
                'Devicetype' => $user->getDevicetype() ? $user->getDevicetype() : '',
                'DeviceId' => $user->getDevicetoken() ? $user->getDevicetoken() : '',
                'VPId' => $user->getVpid() ? base64_encode($user->getVpid()) : '',
                'Status' => $user->getStatus() ? $user->getStatus() : '',
                'mycredit' => $user->getMycredit() ? base64_encode($user->getMycredit()) : '',
            );
        } else {
            return [];
        }
    }

    public static function convertObjectsToArray($Objs)
    {
        $results = array();
        if (count($Objs) > 0) {
            foreach ($Objs as $obj) {
                if ($obj->getId() > 0) {
                    array_push($results, Users::convertObjectToArray($obj));
                }
            }
        }
        return $results;
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     *
     * @return Users
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get middlename
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
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
     * Set email
     *
     * @param string $email
     *
     * @return Users
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
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Users
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
     * Set devicetoken
     *
     * @param string $devicetoken
     *
     * @return Users
     */
    public function setDevicetoken($devicetoken)
    {
        $this->devicetoken = $devicetoken;

        return $this;
    }

    /**
     * Get devicetoken
     *
     * @return string
     */
    public function getDevicetoken()
    {
        return $this->devicetoken;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Users
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Users
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set devicetype
     *
     * @param string $devicetype
     *
     * @return Users
     */
    public function setDevicetype($devicetype)
    {
        $this->devicetype = $devicetype;

        return $this;
    }

    /**
     * Get devicetype
     *
     * @return string
     */
    public function getDevicetype()
    {
        return $this->devicetype;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Users
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
     * Set profileimage
     *
     * @param string $profileimage
     *
     * @return Users
     */
    public function setProfileimage($profileimage)
    {
        $this->profileimage = $profileimage;

        return $this;
    }

    /**
     * Get profileimage
     *
     * @return string
     */
    public function getProfileimage()
    {
        return $this->profileimage;
    }

    /**
     * Set vpid
     *
     * @param string $vpid
     *
     * @return Users
     */
    public function setVpid($vpid)
    {
        $this->vpid = $vpid;

        return $this;
    }

    /**
     * Get vpid
     *
     * @return string
     */
    public function getVpid()
    {
        return $this->vpid;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Users
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
     * Set userloginmodeid
     *
     * @param \DBBundle\Entity\Userrole $userloginmodeid
     *
     * @return Users
     */
    public function setUserloginmodeid(\DBBundle\Entity\Userrole $userloginmodeid = null)
    {
        $this->userloginmodeid = $userloginmodeid;

        return $this;
    }

    /**
     * Get userloginmodeid
     *
     * @return \DBBundle\Entity\Userrole
     */
    public function getUserloginmodeid()
    {
        return $this->userloginmodeid;
    }

    /**
     * Set mycredit
     *
     * @param string $mycredit
     *
     * @return Users
     */
    public function setMycredit($mycredit)
    {
        $this->mycredit = $mycredit;

        return $this;
    }

    /**
     * Get mycredit
     *
     * @return string
     */
    public function getMycredit()
    {
        return $this->mycredit;
    }
}
