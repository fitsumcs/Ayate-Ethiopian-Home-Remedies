<!doctype html>

<html lang=''>

<head>
      <meta charset='utf-8'>
         
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
         
      <meta name="viewport" content="width=device-width, initial-scale=1">
         
      <link rel="stylesheet" href="styles/styles1.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/custom.css">
    <script src="js/script2.js"></script>
   
<title>Ethiopian Home Remedies</title>
</head>

<body>


    <?php
    include "include/oheader.php";
    ?>


<article id="article">
        <div id="display"></div>
        <div id="header">Remdedy Of The Day<br><br></div>
        <div id="compress">
        	<?php include "Include/article.html";?>
        </div>
        
        <br>
        <div id="blank"></div> 
  
 </article>

<!--<div id="botSmall">
	<div id="add">
		<a href="Submit.html">
			<img src="images/add.png" title="Submit a remedy">
		</a>
</div>	-->

<p>Remedies</p>


<nav id='cssmenu' >
      <ul >
            <form action = "remedysearch.php" method ="post">
                <ul id="SearchList">
              <li><input type="text" name="search" id="find" onkeyup="Search()" placeholder="search" maxlength="50"></li>
              <li><img id="search" src="images/search.png" width="30" height="30" alt="search button"></li>
                </ul>
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



<script src="js/libs/jquery.min.js"></script>
<script src="js/query.js"></script>
</body>
</html>
