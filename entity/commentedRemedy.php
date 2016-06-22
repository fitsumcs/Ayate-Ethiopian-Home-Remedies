<?php 
//include "Database_Enquiry.php";
class commentedRemedy{
    private $commentedDate;
    private $commentedContent;
    private $commentId;
    private $commentedTime;
    
   
   function addcommented($commentedDate, $commentedContent, $commentId, $commentedTime){
   $conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); } // for testing purpose
       /*$commentedContent = $_POST['textar'];
       $commentedDate = strftime('%x<br />');
       $commentedTime = strftime('%X<br />');*/
       $query = "insert into comment values('".$commentedDate."','".$commentedContent."','".$commentId."','".$commentedTime."') ";
       //$query = "INSERT INTO comment VALUES ('commentId', 'content', 'date', 'time')
                    //VALUES ($commentId, $commentedContent, $commentedDate, $commentedTime)";
       
       $commentResult = mysqli_query($conn, $query);
       if($commentResult){
           echo "insert successful";
       }
       else{
           echo "failed";
       }
       
       
   }
   
}









?>