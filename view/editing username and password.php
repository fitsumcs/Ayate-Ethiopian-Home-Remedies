<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/4/2016
 * Time: 10:34 AM
 */
?>
<html>
<head>
    <title>
        sign in with username and password
    </title>
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style1.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style2.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/mahi.css">
    <?php
    include "include/oheader.php";
    ?>
</head>
<body>
<div id="containingForm">
    <form id="form" method="POST" action="../controler/set%20username%20and%20password.php">
        <label>
        <p>Username: <input style="" id="user" class="in" type="text" name="username" required="required"></p></label>
        <?php
          //id=username in use
        if(isset($_POST['id'])){
            if($_POST['id'] == 'username in use'){
                echo "username is already used!";
            }
        }
        ?>
       <label> <p>Password: <input id="pass" class="in" type="password" name="pwd1" required="required"></p></label>
        <label><p>Confirm Password: <input class="in" id="cpass" type="password" name="pwd2" required="required"></p></label>
        <!--check if password is the same as confrim password-->
        <?php
        //id=username in use
        if(isset($_POST['id'])){
            if($_POST['id'] == 'confirmation wrong'){
                echo "password confirmation is wrong";
            }
        }
        ?>
        <p><input id="sub" class="btn" type="submit"></p>
    </form>
</div>

</body>
</html>
