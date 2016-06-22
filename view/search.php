<link rel="stylesheet" type="text/css" href="styles/subm.css">
<?php
include "include/oheader.php";
?>
<body>
 <div id = "searchSubmit">
			<div id = "visit">
           
            <form action = "#" method = "post" id ="searchform" name = "searchform">Search by 
            <select id ="searchtype" name ="searchtype">
                <option value ="disease" selected>Disease name</option>
                <option value = "remedy">Remedy name</option></select>
                <input type ="text" name = "searchterm" required="required">
                <input  type = "submit" value ="search"> 
             <button id="submitButton"><a href="">Submit</a></button>
           </form>
			
              </div>
<article>
<h1>Submissions<br></h1>
<div id="remedies">
 <?php 
 include "../model/Database_Enquiry.php";

 $searchType = $_POST['searchtype'];
$searchItem = trim($_POST['searchterm']);
 $submits = new databaseEnquiry();
 $searchresult = $submits->searchSubmittedRemedy($searchType, $searchItem); 

 
 $number = $searchresult->num_rows;

// create short variable names

        if (!get_magic_quotes_gpc()){
                $searchType = addslashes($searchType);
                $searchItem = addslashes($searchItem);
        }

if ($number==1){
echo "<p>".$number." result found</p>";}
else if ($number ==0){
    echo "<p>no results found</p>";}
else{
echo "<p>".$number." results found</p>";}

    for ($i=0; $i <$number; $i++) {
            $row = $searchresult->fetch_assoc();
            echo "<a href = 'comment.html' style = 'color: black'><p><strong>Remedy Name: ";
            echo htmlspecialchars(stripslashes($row['remedyName']));
            echo "</strong><br />Disease Name: ";
            echo stripslashes($row['diseaseName']);
            echo "<br /><small>".$row['time']."</small>";
            echo "<br />Description: ";
            echo stripslashes($row['description'])."</a><br>";
            echo "<br><small><a style = 'color: blue;'>More...</a></small>";


    }


?>
</div>



</article>


</body>
</html>
