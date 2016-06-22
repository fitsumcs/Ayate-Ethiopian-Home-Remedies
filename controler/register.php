<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/1/2016
 * Time: 8:02 PM
 */
include "../model/Registration.php";
class registationControler{
    private $confrim;
    function __construct()
    {
        
    }
    function register($array){//array of registration information
        $firstName = $array[0];
        $middleName = $array[1];
        $lastName = $array[2];
        $username = $array[3];
        $qualification = $array[4];
        $occupation = $array[5];
        $gender = $array[6];
        $email = $array[7];
        $registrationObject = new Registration();//calls the registration class to register user
        $this->confrim = $registrationObject->addProfessional($firstName, $middleName, $lastName, $username, $qualification, $occupation, $gender, $email);
        return $this->confrim;
    }

    
}

?>