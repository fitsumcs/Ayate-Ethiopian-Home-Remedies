<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/9/2016
 * Time: 3:54 PM
 */
include "../model/professional.php";
$professional = new professional("","" ,"" , "", "", "","" ,"" ,"" );
$array = $professional->getEverything($username);
?>