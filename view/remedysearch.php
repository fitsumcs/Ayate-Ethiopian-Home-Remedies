<!doctype html>

<html lang=''>

<head>
      <meta charset='utf-8'>
         
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
         
      <meta name="viewport" content="width=device-width, initial-scale=1">
         
      <link rel="stylesheet" href="css/styles.css">
   
<title>Ethiopian Home Remedies</title>
</head>

<body>
<div id="Wallpaper-LEAVE-INTACT">
<div class="top">
	
Ayate
<div id="topNav">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Professional</a>
</div>
</div>


<article id="article">
        
        	<?php 
        include "../model/Database_Enquiry.php";

        
        $searchItem = ($_POST['search']);
        $submits = new databaseEnquiry();
        $searchresult = $submits->searchRemedy($searchItem);
        $number = $searchresult->num_rows;
       
        

        for ($i = 0; $i < $number; $i++) {
            $row = $searchresult->fetch_assoc();
            echo "<a href = '#' style = 'color: black'><p><strong>Remedy Name: ";
            echo htmlspecialchars(stripslashes($row['remedyName']));
            echo "</strong><br />Disease Name: ";
            echo stripslashes($row['diseaseName']);
            echo "<br /><small>" . $row['time'] . "</small>";
            echo "<br />Description: ";
            echo stripslashes($row['description']) . "</a><br>";
            echo "<br><small><a style = 'color: blue;'>More...</a></small>";


        }
        if ($number == 1) {
            echo "<p style = 'color:black>" . $number . " result found</p>";
        } else if ($number == 0) {
            echo "<p style = 'color:black'>no results found</p>";
        } else {
            echo "<p style = 'color:black>" . $number . " results found</p>";
        }

?>
  
 </article>

<div id="botSmall">
	<div id="add">
		<a href="Submit.html">
			<img src="images/add.png" title="Submit a remedy">
		</a>
</div>	

<p>Remedies</p>
</div>
</div>

<nav id='cssmenu' >
      <ul >
            <form action = "#" method = 'post'>
              <input type="text" name="search" id="find" onkeyup="Search()" placeholder="search" maxlength="50"> 
              <img id="search" src="images/search.png" width="30" height="30" alt="search button"> 
            </form>
            <li  ><a href="#" data-aka="Disease Category > Respiratory Diseases"  class="Catagories" id="Respiratory" > <span> Respiratory Diseases</span></a>
          
            <ul>
              <li id="hide"><?php include "Include/server.php"; ViewResp(); ?></li>
              
              </ul>
             
            </li>
            <li>
            <a  class="Catagories" id="Deficiency" href='#' data-aka="Disease Category > Defficiency Diseases"class="Catagories" onclick="View1()" ><span>Difficiency Diseases</span></a>
             <ul>
              <li id="hide1"><?php viewDiff(); ?></li>
              
              </ul>
 
            </li>
            <li>
            <a id="Skin" class="Catagories" href='#' data-aka="Disease Category > Skin Diseases" ><span>Skin Diseases</span></a>
                         <ul>
              <li id="hide2"><?php viewSkin(); ?></li>
              
              </ul>

            </li>
            <li class='active has-sub'  ><a class="Catagories" href='#' id="Internal" data-aka="Disease Category > Internal Diseases"  onclick="View4()"><span>Internal Diseases</span></a>
            
                          <ul>
              <li id="hide3"><?php viewInt(); ?></li>
              
              </ul>
            </li>
            <li><a class="Catagories" href='#' id="Mental" data-aka="Disease Category > Mental Diseases" onclick="View5()" ><span>Mental Diseases</span></a>
                         <ul>
              <li id="hide4"><?php viewMen(); ?></li>
              
              </ul>
            </li>
            <li class='last'><a class="Catagories" href='#' id="STD" data-aka="Disease Category > STD" onclick="View6()" ><span>STD</span></a>
                            <ul>
              <li id="hide5"><?php viewSTD(); ?></li>
              
              </ul>

            </li>

       </ul>
</nav>


</body>
</html>
