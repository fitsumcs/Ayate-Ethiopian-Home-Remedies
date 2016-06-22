//function displays filtering checkboxes on click
 $(".illneses").click(function(event){
	    var text=$(event.target).text();
	    var text2 =event.target.id;
		var string="#";
		$(string.concat(text2)).append("<ul id=\"checkbox\"><li><input name='terms' class='terms' type='checkbox'>A</li>"+
		"<li ><input name='terms' class='terms' type='checkbox'></li>"+
		"<li ><input name='terms' class='terms' type='checkbox'></li></ul>");
		
		
		// applying css for the filtering checkboxes
		$("#checkbox li").css({'float':"left"},{'position':'absolute'},{'left':'0px'});
		$(".class").css({'position':'absolute'},{'left':'0px'},{'marginLeft':'0px'});               
		
}); 
