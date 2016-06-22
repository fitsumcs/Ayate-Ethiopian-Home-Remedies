<?php
	$conn = null;
	function connect()
	{
		$conn = mysqli_connect('localhost', 'root', '', 'Ayate');
		if (!$conn) {
     		die("Connection failed: " . mysqli_connect_error());  // for testing purpose
     		connect();   //actual implementation....if the connection fails try again
		}
	}
	
	function searchRemedy(){
        $searchResult = $_POST['idname'];
        $query = "select * 
                  from submit,list
                  where 'diseaseName' like $searchResult  or 'remedyName' like $searchResult";//is there a list table?
       $result =  mysqli_query($conn,$query);
       $searchResult = array();
       $i = 0;
       if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
         $searchResult[$i] = array($row['remedyName'], $row['diseaseName'], $row['Content'], $row['Date']);//have to check the order
            i++;
     }return $searchResult;
       }
	}// end search remedy

	function searchComment(){
          //comments cannot be separated from the remedy lists right???
	}//end search comment

	function searchSubmittedRemedy(){
    //$searchResult = $_POST['idname'];
    $query = "select * 
             from submit
           where 'diseaseName' like $searchResult or  'remedyName' like $searchResult";
       $searchResult =  mysqli_query($conn,$query);
	}// end search submitted remedy
?>