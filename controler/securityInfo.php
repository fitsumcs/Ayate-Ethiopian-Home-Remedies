<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/13/2016
 * Time: 11:34 PM
 */
//oldPassword newPassword confirmNewPassword
include "../model/professional.php";
session_start();
$username = $_SESSION['POST'];

$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$confirmNewPassword = $_POST['confirmNewPassword'];
if(strlen($newPassword) > 4) {
    if ($newPassword == $confirmNewPassword) {
        $obj = new professional("", "", "", "", "", $username, "", "", "");
        $result = $obj->changePassword($oldPassword, $newPassword);
        if ($result) {
            header("Location: ../view/professional.php");
        } else {
            header("Location: ../view/profile%20edit.php?id=password");
        }
    }
    else {
        header("Location: ../view/profile%20edit.php?conpass=confirm");
    }
}
else{
    header("Location: ../view/profile%20edit.php?new=short");
}
?>