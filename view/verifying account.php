<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/2/2016
 * Time: 11:12 PM
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title>confrim</title>
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style1.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style2.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/mahi.css">

</head>


<body >
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
</header>

    <div class = "pageInfo">

        <!--<a href="#" id="botbot"></a>-->
    </div>
    <p>We have send the confrimation nessage in email.Please check your email and put the confrimation code on the given </p>
    <form id="conf" name="confrimForm" action="" method="post">
        <label><p>Your confrimation code:</p>
            <input type="text" name="confirm" class="inp"/>
        </label>
        <button type="submit" class="btn" name="submit">confrim</button>
    </form>
    <?php
    include "../model/Registration.php";
    //echo "in php";
    $tryNumber = 0;
    if(isset($_POST['submit'])){{
        echo "button is set";
        if (isset($_POST['confirm'])){
            //echo "input is set";
            $value = $_POST['confirm'];
            session_start(); //Access  POST variables confrimation number
            $confirm = $_SESSION['POST'];
            echo "$confirm<br/>$value";
            if($confirm == $value){
                //echo "confrimation number correct";
                $register = new Registration();
                $register->changeStatus($confirm);//change status of user
                unset($_SESSION['POST']);//Unset the useless session variable and direct to professeional edit page
                header("Location: editing%20username%20and%20password.php");
                //enter code here
            }

            else{
                $tryNumber += 1;//trying one time
                echo "confrimation wrong try";
                if($tryNumber == 3){
                    echo "You tried 3 times";
                    unset($_SESSION['POST']);//Unset the useless session variable and direct to home page page
                    //edit code here
                }
                elseif ($tryNumber == 2){
                    echo "<p style='color: red'>You have only got one more chance</p>";
                }
            }
            //$confrimation = $_POST['$confrimvalue'];


        }
    }

    }
    ?>



</body>
</html>
