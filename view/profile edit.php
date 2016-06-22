<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style1.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style2.css">
    <script src = "js/script2.js"></script>
    <script src = "js/myjs.js"></script>

</head>


<body>
<?php
include("header.php");
session_start();
//include "../controler/profileInfo.php";
if(isset($_SESSION['POST'])){
    $username = $_SESSION['POST'];
    include "../controler/profileInfo.php";
}
else{
    header("Location: login.php");
}
?>

<div class = "profile-whole">
    <div class = "profile-inner">
        <ul id = "profileChangeButtons">
            <li id = "genButton" style = "background-color: dimgray"><button onclick = "showGen()">General</button><li>
            <li id = "secButton"><button onclick = "showSec()">Security</button></li>
        </ul>
        <div class = "profile-general-content" id = "gen">
            <p id = "in-sign"><i>General</i></p>
            <form action = "../controler/generalInfo.php" method = "post">
                <ul>
                    <li>
                        <label for = "username">Username:</label>
                        <input name = "username" type = "text" placeholder="<?php echo $username ?>" tabindex="1">
                    </li>
                    <?php
                    if(isset($_GET['id'])){
                        if($_GET['id'] == 'incorrect'){
                            echo "<p style='color: red'>username already in use</p>";
                        }
                    }
                    ?>
                    <li>
                        <label for = "qualification">Qualification:</label>
                        <input name = "qualification" type = "text"  placeholder="<?php echo $array[8] ?>" tabindex="5">
                    </li>

                    <li>
                        <label for = "occupation">Occupation:</label>
                        <input name = "occupation" type = "text" placeholder="<?php echo $array[7] ?>" tabindex="6">
                    </li>

                    <li>
                        <label for = "experience">Experience:</label>
                        <input name = "experience" type = "text" placeholder="<?php echo $array[6] ?>" tabindex="6">
                    </li>
                    <li>
                        <label for = "workAddress">Work Address:</label>
                        <input name = "workAddress" type = "text" placeholder="<?php echo $array[5] ?>" tabindex="6">
                    </li>
                    <li>
                        <label for = "phoneNumber">Phone Number:</label>
                        <input name = "phoneNumber" type ="tel" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +99(99)9999-9999)' placeholder="<?php echo $array[4] ?>" tabindex="7">
                    </li>
                    <li>
                        <label for = "email">Email:</label>
                        <input name = "email" type = "email" placeholder="<?php echo $array[3] ?>" tabindex="6">
                    </li>
                    <li id = "csbuttons">
                        <a href = "professional.php" id = "profileCancel">Cancel</a>
                        <input type = "submit" value = "Save" id = "saveButton">
                    </li>
                </ul>
            </form>
        </div>

        <div class = "profile-security-content" id = "sec" style = "display: none;">
            <p id = "in-sign"><i>Security</i></p>
            <form action = "../controler/securityInfo.php" method = "post">
                <ul>
                    <li>
                        <label for = "oldPassword">Old Password:</label>
                        <input name = "oldPassword" type = "password" tabindex="1" required="required" />
                    </li>
                    <?php
                    if(isset($_GET['id'])){
                        if($_GET['id'] == 'password'){
                            echo "<p style='color: red'>password incorrect</p>";
                        }
                    }
                    ?>
                    <li>
                        <label for = "newPassword">New Password:</label>
                        <input name = "newPassword" type = "password" tabindex="2" required="required"/>
                    </li>
                    <?php
                    if(isset($_GET['new'])){
                        if($_GET['new'] == 'short'){
                            echo "<p style='color: red'>password must be greater than 4 characters</p>";
                        }
                    }
                    ?>
                    <li>
                        <label for = "confirmNewPassword">Confirm New Password:</label>
                        <input name = "confirmNewPassword" type = "password" tabindex="3" required="required" value="<?php
                        if(isset($_POST['submit'])) {
                            if (isset($_POST['newPassword'])) {
                                echo $_POST['newPassword'];
                            }
                            else{
                                echo "";
                            }
                        }    ?>"/>
                    </li>
                    <?php
                    if(isset($_GET['conpass'])){
                        if($_GET['conpass'] == 'confirm'){
                            echo "<p style='color: red'>confirmation wrong</p>";
                        }
                    }
                    ?>

                    <li id = "csbuttons">
                        <a href = "professional.php" id = "profileCancel">Cancel</a>
                        <input type = "submit" value = "Save" id = "saveButton">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>






</body>

</html>