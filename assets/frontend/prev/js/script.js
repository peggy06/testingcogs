function nav_animation(){
	$("#flag").mouseover(function(){
		$("#submenu").show();
	});
	
	$("#flag").mouseout(function(){
		$("#submenu").hide();
	});
	
	$("#submenu").mouseover(function(){
		$("#submenu").show();
	});
	
	$("#submenu").mouseout(function(){
		$("#submenu").hide();
	});
	
	$("#newArtHead").mouseenter(function(){
		$("#newArtGal").fadeIn("slow");
	});
	
	$("#newArtHead").click(function(){
		$("#newArtGal").fadeIn("slow");
	});
	
	$("#recArtHead").mouseenter(function(){
		$("#recArtGal").fadeIn("slow");
	});
	
	$("#recArtHead").click(function(){
		$("#recArtGal").fadeIn("slow");
	});
	
	$("div.parent").click(function(){
		$("body").addClass("disableScroll");
		$("body").removeClass("enableScroll");
	});
	
	$("kbd.exit").click(function(){
		$("div.child").hide();
		$("body").removeClass("disableScroll");
		$("body").addClass("enableScroll");
	});
	
	
	
	
  	$("body").mouseover(function(){
    var div=$("#header1");  
    div.animate({left:'100px'},"fast");
    div.animate({fontSize:'2.5em'},"slow");
    
    var div=$("#header2");  
    div.animate({left:'100px'},"slow");
    div.animate({fontSize:'1.875em'},"slow");
	});
	
}
//auto load
$(document).ready(function(){
	nav_animation();
});