var categories = ["Respiratory","Deficiency","Skin","Internal","STD","Other"];
var drop = document.getElementById("dropdown");
function populate(){
    for(var i = 0; i <= categories.length-1; i++){
          
        var drop = document.getElementById("dropdown");
        var newOption = document.createElement("option");
        var copy = document.createTextNode(categories[i]);

        newOption.appendChild(copy);
        drop.appendChild(newOption);
    }
}
function menuin(){
    document.getElementById("menu-list").style.display = "block";
}
function menuout(){
    document.getElementById("menu-list").style.display = "none";
}
/***********/
/*** Welcome Page JS */
/**********/

var imgNum = 3;
var imgShown = 0;
var Secs = 4;
var Holder = [];

function Timer(){
    imgShown++;
    if(imgShown == imgNum)
        imgShown = 0;
    Effect();
}
function Effect(){
    for(var j=0; j< imgNum; j++){
        Holder[j].style.opacity = "0";
        Holder[j].style.visibility = "hidden";
    }
    Holder[imgShown].style.opacity = "1";
    Holder[imgShown].style.visibility = "visible";
}
/***********/
/*** Forgot pop-up JS */
/**********/


// Validating Empty Field

function check_empty() {
    if (document.getElementById('forgotEmail').value == "") {
    }
    else {
        document.getElementById('forgot-form').submit();

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



/************/
/*** Profile Form JS ***/
/***********/

function showSec(){
    document.getElementById("genButton").style.backgroundColor = "transparent";
    document.getElementById("secButton").style.backgroundColor = "dimgray";
    document.getElementById("gen").style.display = "none";
    document.getElementById("sec").style.display = "block";
}

function showGen(){
    document.getElementById("genButton").style.backgroundColor = "dimgray";
    document.getElementById("secButton").style.backgroundColor = "transparent";
    document.getElementById("sec").style.display = "none";
    document.getElementById("gen").style.display = "block";
}

