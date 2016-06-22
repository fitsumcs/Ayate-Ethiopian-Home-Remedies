<?php
function validate($value){


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
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel = "stylesheet" href = "styles/custom.css">
    <link rel = "stylesheet" href = "styles/style1.css">
    <link rel = "stylesheet" href = "styles/style2.css">
    <link rel = "stylesheet" href = "styles/mahi.css">
    <script src = "js/myjs.js"></script>


</head>
<?php

include "../controler/register.php";
if(isset($_POST['submit'])){
    if(!(is_numeric($_POST['occupation'])) && !(is_numeric($_POST['qualification']))
        && !(is_numeric($_POST['lastName'])) && !(is_numeric($_POST['middleName'])) &&
        !(is_numeric($_POST['lastName'])) && !validate($_POST['occupation']) &&
        !validate($_POST['qualification']) && !validate($_POST['middleName']) &&
        !validate($_POST['lastName']) && !validate($_POST['firstName']) && (strpos($_POST['email'],'.com')) && strpos($_POST['email'], '@')){//if input is verified
        $gender = "";
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];


        $array = array($_POST['firstName'],$_POST['middleName'],$_POST['lastName'],$_POST['username'],$_POST['qualification'],$_POST['occupation'],$gender,$_POST['email']);
        //echo "submit";
        $registering = new registationControler();//call the class that controls registration
        $confrimation = $registering->register($array);//accepts confrmation value
        //echo "$confrimvalue";
        if ($confrimation == "already registered"){
                header('Location: registration%20form.php?registered=yes');
            }
        elseif($confrimation == true) {

            session_start();
            $_SESSION['POST'] = $confrimation;
            header("Location: verifying%20account.php");
        }

        else{
            //echo "Registration failed";


            header('Location: registration%20failed.php');
        }
    }
    }
}

?>


<body >
<?php
include "header.php";
?>
<div class = "register-whole">
    <div class = "register-content">
        <p id = "in-sign"><i>Register</i></p>
        <!--../Controler/register.php-->

        <form name="form" action = ""  method = "post" >
            <ul id="registration">
                <li>
                    <label for = "firstName">First Name:</label>
                    <input  id="firstName" type = "text" name = "firstName"  class="doNotChange"  required="required" value="<?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['firstName'])) {
                            echo $_POST['firstName'];
                        }
                        else{
                            echo "";
                        }
                    }    ?>"/>
                    <?php
                    if(isset($_POST['firstName'])){
                        if(is_numeric($_POST['firstName']) ){
                            echo "<p style='color:red'>invalid input</p>";
                        }
                        else{
                            if(validate($_POST['firstName'])){
                                echo "<p style='color:red'>invalid input</p>";
                            }
                        }


                    }
                    ?>


                </li>
                <li>
                    <label for = "middleName">Middle Name:</label>
                    <input name = "middleName" type = "text" tabindex="2" class="doNotChange"  required="required" value="<?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['middleName'])) {
                            echo $_POST['middleName'];
                        }
                        else{
                            echo "";
                        }
                    }    ?>"/>
                    <?php
                    if(isset($_POST['middleName'])){
                        if(is_numeric($_POST['middleName'])){
                            echo "<p style='color:red'>invalid input</p>";
                        }
                        else {
                            if (validate($_POST['middleName'])) {
                                echo "<p style='color:red'>invalid input</p>";
                            }
                        }

                    }
                    ?>
                </li>
                <li>
                    <label for = "lastName">Last Name:</label>
                    <input name = "lastName" type = "text" class="doNotChange" tabindex="3" required="required" value="<?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['lastName'])) {
                            echo $_POST['lastName'];
                        }
                        else{
                            echo "";
                        }
                    }    ?>"/>
                    <?php
                    if(isset($_POST['lastName'])){
                        if(is_numeric($_POST['lastName'])){
                            echo "<p style='color:red'>invalid input</p>";
                        }
                        else {
                            if (validate($_POST['lastName'])) {
                                echo "<p style='color:red'>invalid input</p>";
                            }
                        }

                    }
                    ?>
                </li>
                <li>
                    <label for = "username">Username:</label>
                    <input name = "username" type = "text" tabindex="4" class="doNotChange" required="required"
                           value="<?php
                           if(isset($_POST['submit'])) {
                               if (isset($_POST['username'])) {
                                   echo $_POST['username'];
                               }
                               else{
                                   echo "";
                               }
                           }    ?>"/>
                </li>
                <li id = "genderli">
                    <label for = "gender">Gender:</label>
                    <input name = "gender" type = "radio" tabindex="5" value = "male"> Male
                    <input name = "gender" type = "radio" tabindex="5" value = "female"> Female
                    <?php
                    if(isset($_POST['submit'])) {
                        if (!isset($_POST['gender'])) {
                            echo "<p style='color:red'>gender is required</p>";
                        }
                    }
                    ?>

                </li>

                <li>
                    <label for = "qualification" >Qualification:</label>
                    <input name = "qualification" type = "text" tabindex="6" class="doNotChange" placeholder="e.g MSC in herbal medicine" required="required" value="<?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['qualification'])) {
                            echo $_POST['qualification'];
                        }
                        else{
                            echo "";
                        }
                    }    ?>"/>
                    <?php
                    if(isset($_POST['qualification'])){
                        if(is_numeric($_POST['qualification'])) {
                            echo "<p style='color:red'>invalid input</p>";
                        }
                        else {
                            if (validate($_POST['qualification'])) {
                                echo "<p style='color:red'>invalid input</p>";
                            }
                        }

                    }
                    ?>
                </li>
                <li>
                    <label for = "occupation">Occupation:</label>
                    <input name = "occupation" type = "text" tabindex="7" class="doNotChange" placeholder="lecturer in Addis Ababa university" required="required" value="<?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['occupation'])) {
                            echo $_POST['occupation'];
                        }
                        else{
                            echo "";
                        }
                    }    ?>"/>
                    <?php
                    if(isset($_POST['occupation'])){
                        if(is_numeric($_POST['occupation'])){
                            //echo "<p style='color:red'>can not be number</p>";
                        }
                        else {
                            if (validate($_POST['occupation'])) {
                               // echo "<p style='color:red'>invalid input</p>";
                            }
                        }
                    }
                    ?>
                </li>
                <li>
                    <label for = "email">Email:</label>
                    <input name = "email" type = "email" class="doNotChange" tabindex="8" required="required" value="<?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['email'])) {
                            echo $_POST['email'];
                        }
                        else{
                            echo "";
                        }
                    }    ?>"/>

                </li>
                <?php
                if(isset($_GET['registered'])){
                    if($_GET['registered']== 'yes'){
                        echo "<p style='color: black'>you are already registered. If you forgot your password  <a href='login.php'><u>click here</u></a> </p>";
                    }
                }

                ?>
                <li id = "crbuttons">
                    <a href = "#" id = "regCancel">Cancel</a>
                    <input type = "submit" value = "Register" class="doNotChange" id = "registerButton" name="submit">
                </li>
            </ul>
        </form>

    </div>
</div>


</body>

</html>