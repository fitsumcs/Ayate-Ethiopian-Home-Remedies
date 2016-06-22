<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="styles/custom.css">
<link rel="stylesheet" type="text/css" href="styles/style1.css">
<link rel="stylesheet" type="text/css" href="styles/style2.css">
<link rel="stylesheet" type="text/css" href="styles/styles1.css">
<link rel="stylesheet" href="styles/styles.css">
<link rel = "icon" href = "images/logo.png">
<script src = "js/script2.js"></script>

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

<link rel = "icon" href = "images/logo.png">
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

<body>





<article id="article">
    <div id="display"></div>
    <div id="header">Remdedy Of The Day<br><br></div>
    <div id="compress">
        <?php include "Include/article.html";?>
    </div>

    <br>
    <div id="blank"></div>

</article>

<p></p>


<nav id='cssmenu' >
    <ul >
        <form action = "remedysearch.php" method ="post">
            <ul id="SearchList">
                <li><input type="text" name="search" id="find" onkeyup="Search()" placeholder="search" maxlength="50"></li>
                <li><img id="searchIcon" src="images/search.png" width="30" height="30" alt="search button"></li>
            </ul>
        </form>
        <li  ><a href="#" data-aka="Disease Category > Respiratory Diseases"  class="Catagories" id="Respiratory" > <span> Respiratory Diseases</span></a>

            <ul>
                <li id="hide"><?php include "Include/server.php"; ViewResp(); ?></li>

            </ul>

        </li>
        <li>
            <a  class="Catagories" id="Deficiency" href='#' data-aka="Disease Category > Defficiency Diseases"class="Catagories" onclick="View1()" ><span>Difficiency Diseases</span></a>
            <ul>
                <li id="hide1"><?php viewDiff(); ?></li>

            </ul>

        </li>
        <li>
            <a id="Skin" class="Catagories" href='#' data-aka="Disease Category > Skin Diseases" ><span>Skin Diseases</span></a>
            <ul>
                <li id="hide2"><?php viewSkin(); ?></li>

            </ul>

        </li>
        <li class='active has-sub'  ><a class="Catagories" href='#' id="Internal" data-aka="Disease Category > Internal Diseases"  onclick="View4()"><span>Internal Diseases</span></a>

            <ul>
                <li id="hide3"><?php viewInt(); ?></li>

            </ul>
        </li>
        <li><a class="Catagories" href='#' id="Mental" data-aka="Disease Category > Mental Diseases" onclick="View5()" ><span>Mental Diseases</span></a>
            <ul>
                <li id="hide4"><?php viewMen(); ?></li>

            </ul>
        </li>
        <li class='last'><a class="Catagories" href='#' id="STD" data-aka="Disease Category > STD" onclick="View6()" ><span>STD</span></a>
            <ul>
                <li id="hide5"><?php viewSTD(); ?></li>

            </ul>

        </li>

    </ul>
</nav>



<script src="js/libs/jquery.min.js"></script>
<script src="js/query.js"></script>
</body>

