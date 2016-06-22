// This functions listed below lsits down all disesases
var Resp=0, Defi=0, Skin=0, inter=0, mental=0, std=0, filter=[];

// this function displays the disesases in each catagory
$(".Catagories").on("click", function(){
	
if(this.id=="Respiratory"){$("#hide").css({"display": "block"});} 

else if(this.id=="Deficiency"){$("#hide1").css({"display": "block"});}

else if(this.id=="Skin"){$("#hide2").css({"display": "block"});}

else if(this.id=="Internal"){$("#hide3").css({"display": "block"});}

else if(this.id=="Mental"){$("#hide4").css({"display": "block"});}
else if (this.id=="STD"){$("#hide5").css({"display": "block"});}
else{$("#hide6").css({"display": "block"});}
	
});
	
//this function searchs the disease and 
var searchDatabase=[["Acne",0],["Remedy1",0],["Abdominal",0]];
var match=" ";
function Search(){
var result =document.getElementById("find");

for (var i=0; i<3; i++){
	if (searchDatabase[i][0].search(result.value)==0){
		filter.push(searchDatabase[i]);
		searchDatabase[i][1]+=1;
	}
}
	
match=result.value;
filterAndDisplay();
}
function filterAndDisplay(){

	searchDatabase.sort(sortFunction);
	function sortFunction(a,b){
		if (a[1]===b[1]){
			return 0;
		}
		else{
			return (a[1]>b[1])?-1:1;
		}
	}
	//alert(searchDatabase);
	document.getElementById("article").innerHTML=" ";
	$("#article").append("<h1>Searching a match for \'"+match+"\'</h1><table id=\"container\"><tr><td>"+searchDatabase[0][0]+"</td></tr><tr><td>"+searchDatabase[1][0]+"</td></tr><tr><td>"+searchDatabase[2][0]+"</td></tr></table>");
	
	

}


 $(".Disease").on("click", function(){

   $.ajax({type:"POST", url:"js/disease.php", data:{id:this.id, name:$(this).text()}, success:function(response){
	    document.getElementById("article").innerHTML=response;
   }});

 });

 $("#Remedy").on("click", function(){

	
	 

 });


function a(){
	
	var str1=this.id;
	//alert(this.id);
	var str2="#";
	var str3=str2.concat(str1);
	//alert("here");
	$("#table1").css({"boxshadow":"0 5px 20px rgb(128,128,128)"}, {"height":"450px"}, {"color":"red"}) ;
	$('#tr1').css({"display":"block"}, {"height":"450px"}, {"boxshadow":"0 5px 20px rgb(128,128,128)"});
	
	//$("#table1").innerHTML=" ";
	
	

}












/* if (element[0]==result){
	  for j in  searchDatabase[i]{
		  element[0]==result;
	  }
	  }
  }
   */