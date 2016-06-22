<?php
include "../model/professional.php";
//echo $_POST['username'];
//if form is submitted check username and password
$username = $_POST['username'];
$password = $_POST['psswd'];
//echo "$password";
$profession = new professional("","" ,"" ,"" ,"" , $username,"" ,"" ,"" );//create
$isProfession = $profession->verifyAccount($username, $password);//check if he is a professional
if($isProfession){
    
    session_start();
    $_SESSION['POST'] = $username;
    header("Location: ../view/professional.php");
}
else{
    /*session_start();
    $_SESSION['POST'] = $username;
   $_SESSION['POST'] = $password;*/
    header("Location: ../view/login.php?id=incorrect");
}

?>