<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="view/styles/custom.css">
    <link rel="stylesheet" type="text/css" href="view/styles/style2.css">
    <link rel="stylesheet" type="text/css" href="view/styles/style1.css">
    <link rel = "icon" href = "view/images/logo.png">
    <script src = "view/js/script2.js"></script>


    <style>

        .welcome-whole{

        }
        .welcome-whole img{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: 3s;

        }
        #Welcome-top{
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgb(49,49,59);
            border-top: 4px solid #ed1c24;
        }
        .middle-content{
            top: 25%;
            left: 30%;
            position: absolute;
            width: 60%;

        }
        .middle-content #description{
            padding-top: 15%;
            font-size: 2em;
            color: #e2e2e2;
            text-shadow: 4px;
        }
        #WelcomeContButton{
            margin-left: 30%;
            margin-top: 2%;
            background-color: rgb(49,49,59);
            padding: 10px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 7px;
            border: 1px solid #ed1c24;

        }

    </style>
    <script>
        var imgNum = 3;
        var imgShown = 0;
        var Secs = 4;
        var Holder = [];

        function Timer(){

            imgShown++;
            if(imgShown == imgNum)
                alert("JS works!");
            imgShown = 0;
            Effect();
        }
        function Load(){
            nrShown = 0;
            Holder[0] = document.getElementById("Img1");
            Holder[0].style.visibility = 'visible';
            Holder[0] = document.getElementById("Img1");
            for (var i = 1; i < imgNum; i++){
                Holder[i] = document.getElementById("Img"+(i+1));
            }

        }
        function Effect(){
            Load();
            for(var j=0; j< imgNum; j++){
                Holder[j].style.opacity = "0";
                Holder[j].style.visibility = "hidden";

            }
            Holder[imgShown].style.opacity = "1";
            Holder[imgShown].style.visibility = "visible";

        }

    </script>

</head>

<body onload = "Timer()">
<div class = "welcome-whole"> <!--Whole content-->

    <img id = "Img1" src = "view/images/thyme.jpg" alt = "Slideshow Image">
    <img id = "Img2" src = "view/images/AyateWallpaper.jpg" alt = "Slideshow Image">
    <img id = "Img3" src = "view/images/spices.jpg" alt = "Slideshow Image">


</div>


<div id="Welcome-top">
    <ul class = "brand">
        <li><h1>Ayate</h1></li>  <li>Ethiopian Home Remedies</li>
    </ul>

    <nav id="headerNav">
        <button onmouseover = "menuin()" onmouseout = "menuout()" id = "menu">Menu
            <ul id = "menu-list">
                <li><a href="view/index.php" id= "homeButton">Home</a></li>
                <li><a href="view/about.php" id = "aboutButton">About</a></li>
                <li><a href="view/professionallogin.php" id = "professionalButton">Professional</a></li>
            </ul>
        </button>
        <ul id = "navUL">

            <li><button id= "homeButton"><a href="view/index.php">Home</a></button></li>
            <li><button id = "aboutButton"><a href="view/about.php">About</a></button></li>
            <li><button id = "professionalButton"><a href="professionallogin.php">Professional</a><button></li>
        </ul>
    </nav>


</div>
<div class= "middle-content">
    <p id = description>
        Ayate, a site about Ethiopian home remedies, and more ...
    </p>
    <a href = "view/index.php" id = "WelcomeContButton">Continue</a>
</div>



</body>


</html>