<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style2.css">
    <link rel = "icon" href = "images/logo.png">

    <head>
        <?php
        include "include/pheader.php";
        ?>

    </head>


    <?php
    session_start();
    $username = $_SESSION['POST'];
   // unset($_SESSION['POST']);
    include "../controler/profileInfo.php";

    ?>

<body>

<div class = "proHome-whole">
    <div id = "searchSubmit">
        <div id = "visit">
            <ul>
                <li><input id="search" placeholder="search by" style=" margin-top: 13px; border-radius: 10px; margin-right: 201px;" type="text"></li>
                <li><button id="diseaseButton"><a href="">Disease</a></button><li>
                <li><button id="remedyButton"><a href="">Remedy</a></button><li>
            </ul>

            <div id="searchbox"></div>

        </div>

    </div>


    <div id="professionalInfo">
        <ul>
            <li>Name :<br/> <?php echo $array[0]." ".$array[1]?></li>
            <br>
            <li>E-mail :<br/> <?php echo $array[3] ?></li>
            <br>
            <li>Phone : <br/><?php echo $array[4] ?></li>
            <br>
            <li>Work Address : <br/><?php echo $array[5] ?></li>
            <br>
            <li>Experience :<br/> <?php echo $array[6] ?></li>
            <br>
            <li>Occupation : <br/><?php echo $array[7] ?></li>
            <br>
            <li>Qualification : <br/> <?php echo $array[8] ?></li>
    </div>

    <article>
        <?php include "../controler/professionalSubmit.php";?>

        <!-- What is going on here? <article> has no closing tag. So I added it myself-->
    </article>

</div>

</body>
</html>



