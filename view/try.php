<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style1.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style2.css">

</head>

<body>
<header>
    <div id="top">
        <ul class = "brand">
            <li><h1>Ayate</h1></li>  <li>Ethiopian Home Remedies</li>
        </ul>

        <nav id="headerNav">
            <button><span class = "glyphicon glyphicon-menu-hamburger"></span></button>
            <ul id = "navUL">
                <li><button id="homeButton"><a href="#">Home</a></button></li>
                <li><button id = "aboutButton"><a href="#">About</a></button></li>

                <li><button id = "professionalButton"><a href="#">Professional</a></button> </li>
            </ul>
        </nav>

    </div>

    <div class = "pageInfo">

        <a href="#" id="botbot">Registration</a>
    </div>


</header>
<div class = "register-whole">
    <div class = "register-content">

        <form action = "../controler/register.php" method = "post">
            <ul>
                <li>
                    <label >First Name:
                        <input  type = "text" name = "firstName"  tabindex="1" required="required"/></label>
                </li>
                <li>
                    <label>Middle Name:
                        <input name = "middleName" type = "text" tabindex="2" required="required"/></label>
                </li>
                <li>
                    <label >Last Name:
                        <input name = "lastName" type = "text" tabindex="3" required="required"/></label>
                </li>
                <li>
                    <label>Username:
                        <input name = "username" type = "text" tabindex="4" required="required"/></label>
                </li>
                <li id = "genderli">
                    <label>Gender:
                        <input name = "gender" type = "radio" tabindex="5" value = "male"> Male
                        <input name = "gender" type = "radio" tabindex="5" value = "female"> Female </label>

                </li>

                <li>
                    <label >Qualification:
                        <input name = "qualification" type = "text" tabindex="6" required="required"></label>
                </li>
                <li>
                    <label for = >Occupation:</label>
                    <input name = "occupation" type = "text" tabindex="7" required="required">
                </li>
                <li>
                    <label >Email:</label>
                    <input name = "email" type = "text" tabindex="8" required="required">
                </li>
                <li id = "crbuttons">
                    <a href = "#" id = "regCancel">Cancel</a>
                    <input type = "submit" value = "Register" id = "registerButton" name="submit">
                </li>
            </ul>
        </form>
    </div>
</div>

<?php
//include "../Controler/register.php";
?>




</body>

</html>