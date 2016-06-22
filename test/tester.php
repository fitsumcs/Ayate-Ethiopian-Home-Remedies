<?php
/*include ("../model/database query.php");
include ("../model/professional.php");
include ("../model/Registration.php");
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/22/2016
 * Time: 5:24 AM
 */
//$register = new Registration();
//$register->addProfessional("Mahder Haileslasse Astbeha","Mahi1" ,"professor" ,"doctor" ,"female" ,"mahderhaileslasse@gmail.com");
//$object = new professional('','' ,'' ,'' ,'' ,'Mahi1','' ,'' ,'' );
//$object->changePassword("mahi","Dani" );
//$object->changeWorkInformation("Phd","herbalist" ,"10 years at zewditu" ,"lafto wereda 02" );//quali,occu,expe,workadress
//$ob1 = $object->changePersonalInformation("","" ,"" ,"Mahi1" ,"fmale" );
//$ob2 = $object->verifyAccount('Mahi','' );
/*if($ob2){
    echo "login successful <br/>";
    echo $object->getEmail();
}
else{
    echo "login denied";
}

$object->changePassword("new","mahi" );
/*$query = "select username,password from professionals";
$new = new databaseQuery();
$result = $new ->connect($query);
//$prof = professional::constructor2('mahder','password');

while ($row = mysqli_fetch_assoc($result)){
                echo $row['username'];
                echo $row['password'];

            }
$name = "";
$nam = "mahder";
if($name){
    echo "success $name";
}
if ($nam){
    echo "success $nam";
}
//$random =  mt_rand();
//echo $random;
include "../entity/commentedRemedy.php";
$object = new commentedRemedy();
$int = 123;
$object->addcommented(123,"i am comenting" ,"6/4/2016" ,"7:55" );
echo "<html><head></head><body>";
echo "alert('i love you if you work on popup')";
echo "</body></html>";
include "../model/professional.php";
$obje = new professional("","" ,"" ,"" ,"" ,"haylom" ,"" ,"" ,"" );
$ret = $obje->changePersonalInformation("", "","" ,"hayelom" ,"" );
if(!$ret){
    echo ("username already in use");
}

/*
$name = "";
if($name){
    echo "name is true";
}
else{
    echo "false";
}*/
$pass = "abe";
echo strlen($pass);
?>

