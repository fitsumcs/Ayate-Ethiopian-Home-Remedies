<?php 
$conn = mysqli_connect('localhost', 'root', '', 'ayate');

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); }  // for testing purpose

        $query = "INSERT INTO remedylisting VALUES('002','coconut','kpoikopkopp','flu', '003')";
       //  $query ="Select * from ayate";
       
       $Result = mysqli_query($conn, $query);
	  // var table="<table><tr><td>".row[remedyId]."</td></tr></table>";
     //if()
       
       //echo table;
	   mysqli_close($conn);
?>