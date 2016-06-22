<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/22/2016
 * Time: 1:07 AM
 */


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
$string = "";
if ($number==1){
    echo "<p>".$number." result found</p>";}
else if ($number ==0){
    echo "no result found";
    }
else {
    $string = "<p>" . $number . " results found</p>";
    //echo "<p>".$number." results found</p>";
}

    for ($i = 0; $i < $number; $i++) {
        $row = $searchresult->fetch_assoc();
        $string = $string. "<a href = 'comment.html' style = 'color: black'><p><strong>Remedy Name: ".htmlspecialchars(stripslashes($row['remedyName']))
        ."</strong><br /><br/>Disease Name: ".stripslashes($row['diseaseName'])."<br /><small>" . $row['time'] . "</small>"
        ."<br />Description: ".stripslashes($row['description']) . "</a><br>"."<br><small><a style = 'color: blue;'>More...</a></small>";

        //echo "<a href = 'comment.html' style = 'color: black'><p><strong>Remedy Name: ";
       // echo htmlspecialchars(stripslashes($row['remedyName']));
        //echo "</strong><br />Disease Name: ";
        //echo stripslashes($row['diseaseName']);
        //echo "<br /><small>" . $row['time'] . "</small>";
       // echo "<br />Description: ";
        //echo stripslashes($row['description']) . "</a><br>";
        //echo "<br><small><a style = 'color: blue;'>More...</a></small>";
        //header("Location: ../view/professional.php?id=results");
    }
    echo $string;






?>