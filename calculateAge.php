<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 04/11/2018
 * Time: 03:00
 */

class calculateAge
{
    private static $age,
                   $birthDay = '';

    static function getAge($date){

        $date  = explode('/', $date);
        $toDay = explode('/', date('d/m/Y'));

        if($date[1] < $toDay[1] || ($date[1] == $toDay[1] && $date[0] <= $toDay[0] )){
            self::$age = $toDay[2] - $date[2];
        }else{
            self::$age = $toDay[2] - $date[2] - 1;
        }
        return self::$age;
    }

    static function getBirthDay($date){

        $date  = explode('/', $date);
        $toDay = explode('/', date('d/m/Y'));

        if($date[1] == $toDay[1] && $date[0] == $toDay[0]){
            self::$birthDay = 'Happy Birth Day';
        }
        return self::$birthDay;
    }
}

// TEST

$date = 4;
$date .= '/11';
$date .= '/1990';

//echo $date;
echo calculateAge::getAge($date).'<br/>';
echo calculateAge::getBirthDay($date);
// checkdate(10, 25, 1999); verifie si la date est correct