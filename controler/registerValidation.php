<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/13/2016
 * Time: 9:08 PM
 */


function verify($value){


    if(strpos($value, '1') || strpos($value, '2') || strpos($value, '3') || strpos($value, '4') || strpos($value, '5') || strpos($value, '6') ||
        strpos($value, '7') || strpos($value, '8') || strpos($value, '9') || strpos($value, '0') || strpos($value, '-')||
        strpos($value, '+') || strpos($value, '!') || strpos($value, '@') || strpos($value, '#') || strpos($value, '$') || strpos($value, '%') ||
        strpos($value, '^') || strpos($value, '&') || strpos($value, '*') || strpos($value, '(') || strpos($value, ')') ||
        strpos($value, '_') || strpos($value, '=') || strpos($value, ',') || strpos($value, '<') || strpos($value, '.') ||
        strpos($value, '>') || strpos($value, '/') || strpos($value, '?') || strpos($value, '|') || strpos($value, '"\"')){
        return true;

    }

    return false;
}
?>