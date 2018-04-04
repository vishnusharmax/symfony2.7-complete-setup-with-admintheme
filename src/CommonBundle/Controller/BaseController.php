<?php

namespace CommonBundle\Controller;

use DBBundle\Entity\AdminUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{
    public function LogRequest($req)
    {
        foreach ($req as $key => $value) {
            $this->GetLogger()->info("Parameter Name--" . $key . "& Parameter Value--" . $value);
        }
    }

    public function GetEm()
    {
        return $this->getDoctrine()->getManager();
    }

    protected function GetUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'Userprofile/';
    }

    protected function GetUserProfileUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/profile/';
    }

    protected function GetUploadMenuDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'Usermenu/';
    }

    protected function GetUploadDircity()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'city_icon/';
    }

    protected function GetUploadDirbanner()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'Home_banner/';
    }

    protected function GetUploadDirfacilities()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'facilities/';
    }

    public function print_dump($data)
    {
        echo '<pre>', print_r($data), '</pre>';
        die;
    }

    public function GetResult($result)
    {
        $output['input'] = $result['input'];
        $output['commandResult']['success'] = $result['success'];
        $output['commandResult']['message'] = $result['message'];
        $output['commandResult']['data'] = $result['data'];
        return $output;
    }

    public function SetResult($data, $input, $success, $message)
    {
        $output['commandResult']['input'] = $input;
        $output['commandResult']['success'] = $success;
        $output['commandResult']['message'] = $message;
        if (count($data) > 0) {
            $output['commandResult']['data'] = $data;
        } else {
            $output['commandResult']['data'] = [];
        }
        return $output;
    }

    public function GetLogger()
    {
        return $logger = $this->get('logger');
    }

    public function GetLoggedInUser(Request $request)
    {
        if ($request->getSession()->get('User')) {
            $usr = $request->getSession()->get('User');
            $loggedinuser = $this->GetEm()->getRepository('DBBundle:AdminUser')
                ->find($usr->getId());
            return $loggedinuser;
        }
        return null;
    }

    public function GetLoggedInUserRole(Request $request, AdminUser $loggedInUser)
    {
        if (isset($loggedInUser)) {
            return $loggedInUser->getUserrole()->getName();
        } else {
            return null;
        }
    }

    public function CheckIfLoggedInUser(Request $request)
    {
        if (!$request->getSession()->get('User')) {
            return $this->redirectToRoute('show_login');
        }
        return null;
    }

    public function SetLoggedInUser(Request $request, $user)
    {
        if (isset($user)) {
            $request->getSession()->set('User', $user);
        }
        return null;
    }

    function gen_uuid()
    {
        return sprintf('%04x%04x%04x%04x%04x%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    public function mergeArrays($addresslineone, $addresslinetwo, $state, $city, $pincode, $addresstype)
    {
        $result = array();
        if (count($addresslineone) > 0) {
            foreach ($addresslineone as $key => $name) {
                $result[] = array('addressone' => $name, 'addresstwo' => $addresslinetwo[$key], 'state' => $state[$key], 'city' => $city[$key], 'pincode' => $pincode[$key], 'addresstype' => $addresstype[$key]);
            }
        }

        return $result;
    }

    public function mergeArrayscontact($firstname, $lastname, $mobilenumber, $email, $department, $designation)
    {
        $result = array();
        if (count($firstname) > 0) {
            foreach ($firstname as $key => $name) {
                $result[] = array('firstname' => $name, 'lastname' => $lastname[$key], 'mobilenumber' => $mobilenumber[$key], 'email' => $email[$key], 'department' => $department[$key], 'designation' => $designation[$key]);
            }
        }

        return $result;
    }

    public function mergeeditArrays($addresslineone, $addresslinetwo, $state, $city, $pincode, $addresstype, $addressid)
    {
        $result = array();
        if (count($addresslineone) > 0) {
            foreach ($addresslineone as $key => $name) {
                $result[] = array('addressone' => $name, 'addresstwo' => $addresslinetwo[$key], 'state' => $state[$key], 'city' => $city[$key], 'pincode' => $pincode[$key], 'addresstype' => $addresstype[$key], 'addressid' => $addressid[$key]);
            }
        }

        return $result;
    }
    public function mergemachineArrays($machineid,$modelid,$invoicedate,$commissioningdate)
    {
        $result = array();
        if (count($machineid) > 0) {
            foreach ($machineid as $key => $name) {
                $result[] = array('machineid' => $name, 'modelid' => $modelid[$key], 'invoicedate' => $invoicedate[$key], 'commissioningdate' => $commissioningdate[$key]);
            }
        }

        return $result;
    }
    public function mergeArrayseditcontact($firstname, $lastname, $mobilenumber, $email, $department, $designation,$contactid)
    {
        $result = array();
        if (count($firstname) > 0) {
            foreach ($firstname as $key => $name) {
                $result[] = array('firstname' => $name, 'lastname' => $lastname[$key], 'mobilenumber' => $mobilenumber[$key], 'email' => $email[$key], 'department' => $department[$key], 'designation' => $designation[$key], 'contactid' => $contactid[$key]);
            }
        }

        return $result;
    }
}

