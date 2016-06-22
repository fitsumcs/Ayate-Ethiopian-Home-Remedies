<!DOCTYPE html>
<html>
<head>
    <title>Professional Login</title>
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style1.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style2.css">

    <script src = "js/script2.js"></script>
</head>

<body>
<?php
include "include/oheader.php";
?>
<div class="login-whole">
    <div class = "login-content">
        <p id = "in-sign"><i>Login</i></p>
        <form action = "../controler/login.php" method = "post">
            <label for = "username">Username:</label>
            <input name = "username" type = "text" tabindex="1" required="required">

            <label for = "psswd">Password:</label>
            <input name = "psswd" type = "password" tabindex="2" required="required">
            <input type = "submit" value = "Login" id = "loginButton" required="required">

        </form>
        <button id = "forgot" onclick = "div_show()"><i>Forgot password?</i></button>
    </div>
        <a href = "registration%20form.php" id = "registerLink">Request for an account</a>
        <?php
        if(isset($_GET['id'])){
            if($_GET['id'] == 'incorrect'){
                echo "<p style='color: red'>Invalid user name or password</p>";
            }
        }
        if(isset($_GET['id'])){
            if($_GET['id'] == 'forgotPassword'){
                echo "<p style='color: white'>we have send you a password please use it to login</p>";
            }
            else{
                echo "<p style='color: white'>You are not registered as professional</p>";
            }
        }

        ?>


    <!-- Forgot Password pop-up -->


    <div id = "abc" style = "display: none;">
        <div id = "popupContact">
            <form action = "../controler/login%20controler.php" method = "post" id = "forgot-form">
                <li>
                    <p id = "why-p"> Please enter your e-mail address so we can send you a confirmation code. </p>
                </li>
                <ul>
                    <li>
                        <label for = "forgotEmail">E-mail:</label>
                        <input name = "forgotEmail" type = "email" tabindex="1" id = "forgotEmail" required="required">
                    </li>


                    <li id = "csbuttons">
                        <button id = "profileCancel" type="button" onclick = "div_hide() ">Cancel</button>
                        <input type = "submit" value = "Send" id = "saveButton"">
                    </li>
                </ul>
            </form>
        </div>
    </div> <!-- Pop up ends here -->

</div>

</body>

</html>