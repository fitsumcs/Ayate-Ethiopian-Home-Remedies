<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/4/2016
 * Time: 11:24 AM
 */
include '../model/professional.php';
$user = $_POST['username'];
$pw1 = $_POST['pwd1'];
$pw2 = $_POST['pwd2'];
if($pw1 == $pw2){
    $object = new professional("","" ,"" ,"" ,"" ,$user ,"" ,"" ,"" );
    $userstatus = $object->changePersonalInformation("","" ,"" ,$user ,"" );
    if(!$userstatus){
        header("Location: ../view/editing%20username%20and%20password.php?id=username in use");
    }
    else{
        $object->changePassword($pw1);
        session_start();
        $_SESSION['POST'] = $username;
        header("Location: ../view/professional.php");
    }
}
else{
    header("Location: ../view/editing%20username%20and%20password.php?id=confirmation wrong");
}
?>