<?php

       $diseaseNum=$_POST['id'];
	   $Name=$_POST['name'];
	   
	   $conn = mysqli_connect('localhost', 'root', '', 'eman'); 
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
       } 
      $query ="Select * from Remedies0 where orderNum=$diseaseNum";
      $Result = mysqli_query($conn, $query);
	   echo "<header>Available Remedies for $Name </header>";
      while ($row = mysqli_fetch_assoc($Result))
      {   
       echo "<script>a('"+$row['remedyName']+"');</script>";
		
		echo"<br>";
        echo "<table id='table1'>";
        echo "<tr><td>". $row['remedyName']."</td><td  class='Remedy' ><a href=\"#\" id=". $row['remedyId']." onclick='a('"+$row['remedyName']+"')' >View</a></td></tr><div id='tr1'>".$row['description']."</div>";
       	  
	  echo "</table>";

        
          
      }  

?>