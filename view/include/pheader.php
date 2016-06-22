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
<link rel = "icon" href = "../images/logo.png">
<link rel="stylesheet" type="text/css" href="../styles/style1.css">
<link rel="stylesheet" type="text/css" href="../styles/style2.css">
<script src = "../js/script2.js"></script>
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
                <li><button id = "aboutButton"><a href="#">About</a></button></li>

                <li><button id = "professionalButton"><a href="profile%20edit.php">Profile</a><button></li>
                
               <?php
                if (fun()){
                    echo "<li><button id = \"professionalButton\"><a href=\"../controler/logoutControler.php\">Logout</a><button></li>";
                }


                            ?>
            </ul>
        </nav>

    </div>
    <div id = "decor"></div>
    <div class = "pageInfo">


    </div>


</header>
         