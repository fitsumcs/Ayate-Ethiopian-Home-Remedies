<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/13/2016
 * Time: 8:53 PM
 */
session_start();
$currentUsername = $_SESSION['POST'];
include "../model/professional.php";
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
else{
    $username = "";
}
if(isset($_POST['qualification'])){
    $qualification = $_POST['qualification'];
}
else{
    $qualification = "";
}
if(isset($_POST['occupation'])){
    $occupation = $_POST['occupation'];
}
else{
    $occupation = "";
}
if(isset($_POST['experience'])){
    $experience = $_POST['experience'];
}
else{
    $experience = "";
}
if(isset($_POST['workAddress'])){
    $workAddress = $_POST['workAddress'];
}
else{
    $workAddress = "";
}
if(isset($_POST['phoneNumber'])){
    $phoneNumber = $_POST['phoneNumber'];
}
else{
    $phoneNumber = "";
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
else{
    $email = "";
}

if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['phoneNumber']) ||
    isset($_POST['workAddress']) || isset($_POST['experience']) || isset($_POST['occupation']) || isset($_POST['qualification'])){
//qualification occupation experience workAddress phoneNumber email

    $obje = new professional("","" ,"" ,"" ,"" ,$currentUsername ,"" ,"" ,"" );
    $ret = $obje->changePersonalInformation("", $email,$phoneNumber ,$username ,"" );

    if($ret){
        $obje->changeWorkInformation($qualification, $occupation, $experience, $workAddress);
        session_start();
        if($username){
            $_SESSION['POST'] = $username;
        }
        header("Location: ../view/professional.php");
    }
    else{
        header("Location: ../view/profile%20edit.php?id=incorrect");
    }
}
?>