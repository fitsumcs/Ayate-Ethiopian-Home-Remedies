<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width = device-width, initial-scale = 1">


    <link rel="stylesheet" type="text/css" href="styles/styles.css">

    <link rel="stylesheet" type="text/css" href="styles/subm.css">
    
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/mahi.css">
    <link rel="stylesheet" type="text/css" href="styles/style1.css">
    
    <link rel = "icon" href = "images/logo.png">

    <link rel="script" href="js/script2.js">

    <?php
  include "include/pheader.php";
    ?>

</head>


<?php
if(isset($_SESSION['POST'])){
    $username = $_SESSION['POST'];
    include "../controler/profileInfo.php";
}
else{
    header("Location: login.php");
}

?>

<body>

    <div id = "visit">

        <form action = "" method = "post" id ="searchform" name = "searchform">Search by
            <select id ="searchtype" name ="searchtype">
                <option value ="disease" selected>Disease name</option>
                <option value = "remedy">Remedy name</option></select>
            <input type ="text" name = "searchterm" required="required">
            <input  type = "submit" value ="search" name="search">

        </form>

    </div>
    <div> <?php if(isset($_GET['s'])){
            if($_GET['s'] == 's'){
                echo"<h3 style='color:#069;'>you have sucessfullly debunked the remedy  </h3>" ;}}?>
    </div>

            
            <div id="professionalInfo">
                <img src="images/images.png" alt="profile image" id="profileImage">
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

<article id="submissionDisplay">
    <?php
    if(isset($_POST['search'])){
        include "../controler/professionalSearch.php";
    }
    else {
        include "../controler/professionalSubmit.php";
    }
    ?>
</article>
<div id="verifyDisplay">
    <?php
    include "../controler/displayVerify.php";
    ?>

</div>


</body>
</html>



