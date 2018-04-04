<?php
/**
 * Created by PhpStorm.
 * User: LAP001
 * Date: 4/4/2016
 * Time: 5:37 PM
 */

namespace CommonBundle\Helpers;


use Doctrine\Common\Persistence\ObjectManager;

class UserloginHelper
{
    private $em;
    public function  __construct(ObjectManager $em)
    {
        $this->em = $em;
    }



}