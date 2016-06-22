<?php
function fun(){
    session_start();
    if(isset($_SESSION['POST'])){
        return true;
    }
    else{
        return false;
    }
}
?>
<link rel="stylesheet" href="../styles/styles.css">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="../styles/custom.css">
<link rel="stylesheet" type="text/css" href="../styles/style1.css">
<link rel="stylesheet" type="text/css" href="../styles/style2.css">
<link rel = "icon" href = "../images/logo.png">
<header>
    <div id="top">
        <ul class = "brand">
            <li><h1>Ayate</h1></li>  <li>Ethiopian Home Remedies</li>
        </ul>

        <nav id="headerNav">
                            <button onmouseover = "menuin()" onmouseout = "menuout()" id = "menu">Menu
                                <ul id = "menu-list">
                                    <li><a href="index.php" id= "homeButton">Home</a></li>
                                    <li><a href="about.php" id = "aboutButton">About</a></li>
                                    <li><a href="professionallogin.php" id = "professionalButton">Professional</a></li>
                                </ul>
                            </button>
            <ul id = "navUL">
                <li><button id="homeButton"><a href="index.php">Home</a></button></li>
                <li><button id = "aboutButton"><a href="about.php">About</a></button></li>
                <li><button id = "submissionsButton"><a href="sub.php">Submissions</a><button></li>
                <li><button id = "professionalButton"><a href="
                <?php
                 if (fun()){
                     echo "../view/professional.php";
                 }
                        else{
                            echo "../view/login.php";
                        }
                 ?>
                ">Professional</a><button></li>

            </ul>
        </nav>


    </div>
    <div id = "decor"></div>
    <div class = "pageInfo">


    </div>


</header>
