<!doctype html>

<html lang=''>

<head>
   
<meta charset='utf-8'>
   
<meta http-equiv="X-UA-Compatible" content="IE=edge">
   
<meta name="viewport" content="width=device-width, initial-scale=1">
   
<link rel="stylesheet" href="styles.css">
   
<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
   
<script src="script.js"></script>-->
   
<title></title>
    <script type="text/javascript">
        function check_empty() {
            if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
                alert("Fill All Fields !");
            } else {
                document.getElementById('form').submit();
                alert("Form Submitted Successfully...");
            }
        }
        //Function To Display Popup
        function div_show() {
            document.getElementById('abc').style.display = "block";
        }
        //Function to Hide Popup
        function div_hide(){
            document.getElementById('abc').style.display = "none";
        }
    </script>
</head>




<body>

<Div id="Wallpaper-LEAVE-INTACT">
<div class="top">
	
Ayate
<nav id="topNav">
<a href="#">Home</a>
<a href="#">About</a>

<a href="#">Professional</a>
</nav>

</div>
<div id="botSmall">
<p>Remedies</p>
</div>


 <article>
<header>Influenza<br></header>
<div id="compress">
	<h2>Remedy 1:</h2>
  
<!-- 	<div id="checkbox">
<i>Remedy Info<br>
Remedy no: <label>1 of 26</label><br>
Remedy Status: <label>Verified</label><br>
Percentage of vote:<label>78%<label></i>
</div> -->



</div>

<div id="remedies">
<br>
<p><b>Disease Category:  <br>
<b>Type</b>: Internal <br><br></p>




   <li>Squeeze the juice of 1 lemon into 1 cup of warm water. Drink until finished completely.</li>
   
</ul>

<p> <button onclick = "div_show()" id="commentButton" type="submit" name="comment" >Leave a Comment</button></p>

    <div id="abc">
        <!-- Popup Div Starts Here -->
        <div id="popupContact">
            <!-- Contact Us Form -->
            <form action="#" id="form" method="post" name="form">
                <img id="close" src="images/3.png" onclick ="div_hide()">
                <h2>Comment</h2>
                <textarea id="msg" name="message" placeholder="Write Your comment here..." class="textarea"></textarea>
                <a href="javascript:%20check_empty()" id="submit">Send</a>
            </form>
        </div>
        <!-- Popup Div Ends Here -->
    </div>
    </div>
<br>


<div id="blank">

<div id="contacts">
 <div id="image1" class="images"><a href="example.com"><img src="AddisRedSea.jpg" width="125" height="93.75"><br>Ethiopian Cuisnary</a></div>
 <div id="image2"class="images"><a href="example.com"><img src="four.jpg" width="125" height="93.75"><br>Ginger...find out more about it</a></div>
 <div id="image3"class="images"><a href="example.com"><img src="oldtraditionalist.jpg" width="125" height="93.75"><br>Local Ethiopian traditionalist reveals it</a></div>
 <div id="image4"class="images"><a href="example.com"><img src="womenandchild.jpg" width="125" height="93.75"><br>Harmful practices you dont know about </a></div>
 
</div>
    </div>

<div id="comments">
 </article>


</div>
<!--Insert other stuff below. LEAVE THE ABOVE INTACT-->







<div id='cssmenu'>
<ul>

  <p><input type="text" name="search" placeholder="search" maxlength="50"> <button class="search" type="submit" value="Search" name="search"><img src="search.gif" alt="search button"> </button></p>
   
 
 <li><a href='#'  data-aka="Disease Category > Respiratory Diseases" onclick ="dataRepl(this)" ><span>Respiratory Diseases</span></a></li>
 
<li><a href='#' data-aka="Disease Category > Defficiency Diseases" onclick="dataRepl(this)"><span>Difficiency Diseases</span></a></li>
 
<li><a href='#' data-aka="Disease Category > Skin Diseases"  onclick ="dataRepl(this)"><span>Skin Diseases</span></a></li>



  
<li class='active has-sub'  ><a href='#'  data-aka="Disease Category > Internal Diseases" onclick ="dataRepl(this)"><span>Internal Diseases</span></a>
      
<ul>
         
<li class='has-sub'><a href='#' data-aka="Disease Category > Internal Diseases > further 1" onclick ="dataRepl(this)"><span></span></a>
            
       </li>
         
<li class='has-sub'><a href='#' data-aka="Disease Category > Internal Diseases >  further 2" onclick ="dataRepl(this)"><span></span></a>
  </li>          

</ul>
   </li>
   <li><a href='#' data-aka="Disease Category > Mental Diseases" onclick ="dataRepl(this)"><span>Mental Diseases</span></a></li>
   

 

<li class='last'><a href='#' data-aka="Disease Category > STD"  onclick ="dataRepl(this)"><span>STD</span></a></li>

</ul>
</div>

<div class='content'>

  <div class="contentOne">
    
    
    
  </div>
    

  
</div>


<script src="js/libs/jquery.min.js"></script>
<script src="js/query.js"></script>
<script></script>


<!-- <script src="js/jquery.js"></script> -->













<script>


function dataRepl(e){
var swapMe = document.getElementsByTagName("p");


var botSmall = document.getElementById("botSmall");
var newParagraph = document.createElement("p");
var data=document. createTextNode(e.dataset.aka);
newParagraph.appendChild( data );
botSmall.replaceChild( newParagraph , swapMe[0] );
}

//function displays catagories of filter with checkbox


</script>



<!--<div class="text">
<p><label><strong>Illness: </strong> Diarreah<br>
<strong>Type: </strong>Internal<br>
<strong>Remedy: </strong>Squeeze the juice of 1 lemon into 1 cup of warm water. Drink until finished completely.<br>


<textarea name="contest_entry" rows="10" cols="50" style="color:black; background-color:white;">Approve or disprove with explanation here.
</textarea></label></p>
</div>-->

</body>
<html>
