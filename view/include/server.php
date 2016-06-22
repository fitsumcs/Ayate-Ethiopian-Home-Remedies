<?php


function viewResp(){
      
     $conn = mysqli_connect('localhost', 'root', '', 'ayate');
	    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Disease where Catagory='Respiratory'";
      $Result = mysqli_query($conn, $query);
     

      while ($row = mysqli_fetch_assoc($Result))
      {   
         
        echo "<table id='table'>";
        echo "<tr><td><a href='#' id=".$row['diseaseNum']."  class='Disease'>". $row['diseaseName']."</td></a></tr>";
        echo "</table>";
        
      }      
}



function viewDiff(){
  $conn = mysqli_connect('localhost', 'root', '', 'ayate');
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Disease where Catagory='Deficiency'";
      $Result = mysqli_query($conn, $query);
      // $Result = $this->new->connect($query);
  

      while ($row = mysqli_fetch_assoc($Result))
      {   
        
       echo "<table id='table'>";
        echo "<tr><td><a href='#' id=".$row['diseaseNum']." class='Disease'>". $row['diseaseName']."</td></a></tr>";
        echo "</table>";
          
          
      }      

}


function viewSkin(){
  $conn = mysqli_connect('localhost', 'root', '', 'ayate');
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Disease where Catagory='Skin'";
      $Result = mysqli_query($conn, $query);
    
  

      while ($row = mysqli_fetch_assoc($Result))
      {   
        
       echo "<table id='table'>";
        echo "<tr><td><a href='#' id=".$row['diseaseNum']." class='Disease'>". $row['diseaseName']."</td></a></tr>";
        echo "</table>";
          
          
      }      

}




function viewInt(){
  $conn = mysqli_connect('localhost', 'root', '', 'ayate');
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Disease where Catagory='Mental'";
      $Result = mysqli_query($conn, $query);
      
      while ($row = mysqli_fetch_assoc($Result))
      {   
        
       echo "<table id='table'>";
        echo "<tr><td><a href='#' id=".$row['diseaseNum']." class='Disease'>". $row['diseaseName']."</td></a></tr>";
        echo "</table>";
          
          
      }      

}


function viewMen(){
  $conn = mysqli_connect('localhost', 'root', '', 'ayate');
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Disease where Catagory='Mental'";
      $Result = mysqli_query($conn, $query);
  
      while ($row = mysqli_fetch_assoc($Result))
      {   
        
      echo "<table id='table'>";
        echo "<tr><td><a href='#' id=".$row['diseaseNum']." class='Disease' onclick='viewDisease()'>". $row['diseaseName']."</td></a></tr>";
        echo "</table>";
          
          
      }      

}

function viewSTD(){
  $conn = mysqli_connect('localhost', 'root', '', 'ayate');
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Disease where Catagory='STD'";
      $Result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($Result))
      {   
        
      echo "<table id='table'>";
        echo "<tr><td><a href='#' id=".$row['diseaseNum']." class='Disease' >". $row['diseaseName']."</td></a></tr>";
        echo "</table>";
      }      

}
?>