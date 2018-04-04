<?php

namespace CommonBundle\Helpers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DateHelper
 *
 * @author php1
 */
class DateHelper {

    public function dateDiff($time1, $time2, $precision = 6) {
        // If not numeric then convert texts to unix timestamps
        if (!is_int($time1)) {
            $time1 = strtotime($time1);
        }
        if (!is_int($time2)) {
            $time2 = strtotime($time2);
        }

        // If time1 is bigger than time2
        // Then swap time1 and time2
        if ($time1 > $time2) {
            $ttime = $time1;
            $time1 = $time2;
            $time2 = $ttime;
        }

        // Set up intervals and diffs arrays
        $intervals = array('year', 'month', 'day', 'hour', 'minute', 'second');

//    $intervals = array('ani', 'luni', 'zile', 'ore', 'minute', 'secunde');
        $diffs = array();

        // Loop thru all intervals
        foreach ($intervals as $interval) {
            // Create temp time from time1 and interval
            $ttime = strtotime('+1 ' . $interval, $time1);
            // Set initial values
            $add = 1;
            $looped = 0;
            // Loop until temp time is smaller than time2
            while ($time2 >= $ttime) {
                // Create new temp time from time1 and interval
                $add++;
                $ttime = strtotime("+" . $add . " " . $interval, $time1);
                $looped++;
            }

            $time1 = strtotime("+" . $looped . " " . $interval, $time1);
            $diffs[$interval] = $looped;
        }

        $count = 0;
        $times = array();
        // Loop thru all diffs
        foreach ($diffs as $interval => $value) {
            // Break if we have needed precission
            if ($count >= $precision) {
                break;
            }
            // Add value and interval
            // if value is bigger than 0
            if ($value > 0) {
                // Add s if value is not 1
                if ($value != 1) {
                    $interval .= "s";
                }
                // Add value and interval to times array
                $times[] = $value . " " . $interval ;
                $count++;
            }
        }
		if(count($times)> 0)
		{
		 // Return string with times
        return $times[0];
		}
		else
		{
		 // Return string with times
        return "";
		}


       
    }

    public static function GetUserFormattedDate($date) {
        if (isset($date)) {
            return $date->format('jS M Y');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->format('jS M Y');
        }
    }
    public static function GetFormattedDate($date) {
        if (isset($date)) {
            return $date->format('Y-m-d');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->format('Y-m-d');
        }
    }
    public  static  function date_range($first, $last, $step, $output_format) {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);

        while( $current <= $last ) {

            $dates[] = date($output_format, $current);
            $current = strtotime($step, $current);
        }

        return $dates;
    }
    public static function GetFormattedDatetime($date) {
        if (isset($date)) {
            return $date->format('Y-m-d H:i');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->format('Y-m-d H:i');
        }
    }
    public static function GetFormattedtime($date) {
        if (isset($date)) {
            return $date->format('H:i');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->format('H:i');
        }
    }
    public static function GetUserFormattedtime($date) {
        if (isset($date)) {
            return $date->format('h:i A');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->format('h:i A');
        }
    }
    public static  function GetFormattedtimecorrect($date) {
        if (isset($date)) {
            return $date->setTimezone(new \DateTimeZone('Asia/Kolkata'))->format('H:i');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->setTimezone(new \DateTimeZone('Asia/Kolkata'))->format('H:i');
        }
    }
    public static  function GetUserFormattedtimecorrect($date) {
        if (isset($date)) {
            return $date->setTimezone(new \DateTimeZone('Asia/Kolkata'))->format('h:i A');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->setTimezone(new \DateTimeZone('Asia/Kolkata'))->format('h:i A');
        }
    }
    public static  function GetFormattedmyformat($date) {
        if (isset($date)) {
            return $date->setTimezone(new \DateTimeZone('Asia/Kolkata'))->format('Y-m-d H:i');
        } else {
            $dateObj = new \DateTime();
            return $dateObj->setTimezone(new \DateTimeZone('Asia/Kolkata'))->format('Y-m-d H:i');
        }
    }
    public static function diffInMonths(\DateTime $date1, \DateTime $date2)
    {
        $diff =  $date1->diff($date2);

        $months = $diff->y * 12 + $diff->m + $diff->d / 30;

        return (int) round($months);
    }
}
