<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="styles/subm.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/style1.css">
    <link rel="stylesheet" type="text/css" href="styles/style2.css">
    <link rel = "icon" href = "images/logo.png">
    <script src = "js/script2.js"></script>
    <?php
    include "include/oheader.php";
    ?>


</head>

<body onload = "populate()">

<div id = "searchSubmit">
    <div id = "visit">

        <form action = "" method = "post" id ="searchform" name = "searchform">Search by
            <select id ="searchtype" name ="searchtype">
                <option value ="disease" selected>Disease name</option>
                <option value = "remedy">Remedy name</option></select>
            <input type ="text" name = "searchterm" required id = "">
            <input  type = "submit" value ="search" name='search'>
            <button id="submitButton" onclick = "div_show()">Submit</button>
        </form>

    </div>
    <div style='position: relative; margin-left: 20%; margin-top: 5%;'>   
   <?php if(isset($_GET['id'])){
   			 if($_GET['id'] == 0){
   			 echo " <h3 style='color:#069;'>  oops, we were unable submit your remedy...pls try again!  </div>";
            }
    		else{
        	echo "<div> <h3 style='color:#069;'>you have sucessfullly submitted the remedy:  ".$_GET['id']." </h3></div>";
            }
           } 
   ?>
    </div>
<?php
if(isset($_POST['search'])){include "../controler/professionalSearch.php"; }
else{include "../controler/submitcontrol.php";}

?>
 
      
        
    <div id = "abc" style = "display: none">
<div class = "submit-form">
    <form action = "../controler/submitformcontroler.php" method = "post">
        <p id = "in-sign"><i>Submit your Remedy</i></p>
      <ul>
        <li>
            <label for = "submitTitle">Remedy Name:<label>
            <input name = "submitTitle" type = "text" required='required'/>
        </li>
        <li>
            <label for = "submitDiseaseName">Disease/ Ailment Name:<label>
            <input name = "submitDiseaseName" type = "text" required='required'/>
        </li>
        <li>
            <label for = "submitRemedyCategory">Remedy Category:<label>
                <select name="Disease Category"   id="dropdown" required='required'>
                   
                   
                </select>
        </li>
        <li>
            <label for = "submitRemedyDescription">Description:<label>
            <textarea name = "submitRemedyDescription" required='required'/></textarea>
            
        </li>
        <li>
            <label for = "submitEmail">Email:<label>
            <input name = "submitEmail" type = "email" required='required'/>
        </li>
        <li>
            
            <input type = "submit" id = submitFormButton value = "Submit"/>
        </li>
        <a href='sub.php'id = "subCancel" onclick = "div_hide()">Cancel</a>
      </ul> 
      
    </form>
    </div>
</div> 
        
    
</body>
</html>




