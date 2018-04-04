<?php

namespace CommonBundle\Helpers;

class CommonHelpers {

    public function generatePassword() {
        $alphas = "123456789";
        $alphaLength = strlen($alphas);
        $randomString = '';
        for ($i = 1; $i <= 5; $i++) {
            $randNum = floor(rand(0, 9));
            $randomString .= $randNum;
        }

        for ($i = 1; $i <= 2; $i++) {
            $randomString .= $alphas[rand(0, $alphaLength - 1)];
        }

        return $randomString;
    }

    public static  function  randomDigits($length){
        $digits='';
        $numbers = range(0,9);
        shuffle($numbers);
        for($i = 0;$i < $length;$i++)
            $digits .= $numbers[$i];

        return $digits;
    }
    public function generatetrn() {
        $alphas = "12345678989349435943123456789ABCDEFGHJKMNPQRSTUVWXYZ";
        $alphaLength = strlen($alphas);
        $randomString = '';
        for ($i = 1; $i <= 16; $i++) {
            $randNum = floor(rand(0, 9));
            $randomString .= $randNum;
        }
        for ($i = 1; $i <= 16; $i++) {
            $randomString .= $alphas[rand(0, $alphaLength - 1)];
        }

        return $randomString;
    }
    public static function sendmessage($mobile,$password) {
        $message = "Your One Time Password is:  ".$password."";
   $message = urlencode($message);
        $url = "http://bulksms.anksms.com/api/mt/SendSMS?user=&password=&senderid=&channel=&DCS=0&flashsms=0&number=$mobile&text=".$message."&route=04";
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $output =curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    public static function androidPush($device_token,$msg_type,$msg,$badge) {

        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIDs = array($device_token);
            $key = "";
        $message = array("msg_type" => $msg_type ,"msg" => $msg,"badge" => $badge);
        $headers = array(
            'Authorization: key='.$key,
            'Content-Type: application/json'
        );

        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => $message,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }

    public static function iosPush($singleID, $msg_type, $msg, $badge)
    {

        $key = '';

// generated via the cordova phonegap-plugin-push using "senderID" (found in FCM App Console)
// this was generated from my phone and outputted via a console.log() in the function that calls the plugin
// my phone, using my FCM senderID, to generate the following registrationId

// prep the bundle
// to see all the options for FCM to/notification payload:
// https://firebase.google.com/docs/cloud-messaging/http-server-ref#notification-payload-support

// 'vibrate' available in GCM, but not in FCM
        $fcmMsg = array(
            'body' => $msg,
            "msg_type" => $msg_type,
            "badge" => $badge,
            'title' => 'Symfony',
            'sound' => "default",
            'color' => "#203E78"
        );
// I haven't figured 'color' out yet.
// On one phone 'color' was the background color behind the actual app icon.  (ie Samsung Galaxy S5)
// On another phone, it was the color of the app icon. (ie: LG K20 Plush)

// 'to' => $singleID ;  // expecting a single ID
// 'registration_ids' => $registrationIDs ;  // expects an array of ids
// 'priority' => 'high' ; // options are normal and high, if not set, defaults to high.
        $fcmFields = array(
            'to' => $singleID,
            'priority' => 'high',
            'notification' => $fcmMsg
        );

        $headers = array(
            'Authorization: key=' . $key,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function iosPushsales($singleID, $msg_type, $msg, $badge)
    {

        $key = '';

// generated via the cordova phonegap-plugin-push using "senderID" (found in FCM App Console)
// this was generated from my phone and outputted via a console.log() in the function that calls the plugin
// my phone, using my FCM senderID, to generate the following registrationId

// prep the bundle
// to see all the options for FCM to/notification payload:
// https://firebase.google.com/docs/cloud-messaging/http-server-ref#notification-payload-support

// 'vibrate' available in GCM, but not in FCM
        $fcmMsg = array(
            'body' => $msg,
            "msg_type" => $msg_type,
            "badge" => $badge,
            'title' => 'Symfony',
            'sound' => "default",
            'color' => "#203E78"
        );
// I haven't figured 'color' out yet.
// On one phone 'color' was the background color behind the actual app icon.  (ie Samsung Galaxy S5)
// On another phone, it was the color of the app icon. (ie: LG K20 Plush)

// 'to' => $singleID ;  // expecting a single ID
// 'registration_ids' => $registrationIDs ;  // expects an array of ids
// 'priority' => 'high' ; // options are normal and high, if not set, defaults to high.
        $fcmFields = array(
            'to' => $singleID,
            'priority' => 'high',
            'notification' => $fcmMsg
        );

        $headers = array(
            'Authorization: key=' . $key,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    public static function  geolocationaddress($lat, $long)
    {
        $geocode = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&sensor=false&key=AIzaSyCJyDp4TLGUigRfo4YN46dXcWOPRqLD0gQ";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $geocode);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($response);
        $dataarray = get_object_vars($output);
        if ($dataarray['status'] != 'ZERO_RESULTS' && $dataarray['status'] != 'INVALID_REQUEST') {
            if(isset($dataarray['results'][0]->formatted_address)){

                $address = $dataarray['results'][0]->formatted_address;

            }else{
                $address = 'Not Found';

            }
        } else {
            $address = 'Not Found';
        }

        return $address;
    }

    public static function  GetBlankObject()
    {
        return (object)[];
    }

    public static function GetBlankArray()
    {
        return [];
    }

    public static function daysInMonth($year, $month)
    {
        return date("t", mktime(0, 0, 0, $month, 1, $year));
    }
    public static function androidPushsales($device_token,$msg_type,$msg,$badge) {

        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIDs = array($device_token);
        $key = "";
        $message = array("msg_type" => $msg_type ,"msg" => $msg,"badge" => $badge);
        $headers = array(
            'Authorization: key='.$key,
            'Content-Type: application/json'
        );

        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => $message,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }

    public static function mailer($to,$subject,$messagedata){
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('youemail')
            ->setPassword('youemailpassword');
        $mailer = new \Swift_Mailer($transport);
        if (strlen($to) > 3) {
            $message = (new \Swift_Message($subject))
                ->setFrom(['satakeindia@gmail.com' => 'SATAKEINDIA'])
                ->setTo([$to])
                ->setBody($messagedata);
            $resultdata = $mailer->send($message);
            return $resultdata;

        }else{
            return false;
        }
    }

    /**
     * @param $string - Input string to convert to array
     * @param string $separator - Separator to separate by (default: ,)
     *
     * @return array
     */
public static   function comma_separated_to_array($string, $separator = ',')
    {
        //Explode on comma
        $vals = explode($separator, $string);

        //Trim whitespace
        foreach($vals as $key => $val) {
            $vals[$key] = trim($val);
        }
        //Return empty array if no items found
        //http://php.net/manual/en/function.explode.php#114273
        return array_diff($vals, array(""));
    }
    public static function cleanString($input) {

        $input = htmlspecialchars($input, ENT_IGNORE, 'utf-8');
        $input = strip_tags($input);
        $input = stripslashes($input);
        return $input;

    }

    public static  function  ClearNumbers($input) {

        $input = preg_replace("/[^0-9]/","", $input);
        if($input == '') $input = 0;
        return $input;

    }

    public static  function removeonlywhitespaceclean($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces .

        return $string;
    }

    public static  function removeallextraclean($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

}

