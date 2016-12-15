$(document).ready(function(){


/*$(document).keydown(function(e) {
    switch(e.which) {
        case 37: openLeft();
        break;

        case 38: openUp();
        break;

        case 39: openRight();
        break;

        case 40: openDown();
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});*/




	var slideSpeed = 2000;
	var position = 5; /*position by numkeypad '5 means center'*/ 
	var $horizontal = $(".horizontal");
	var $vertical = $(".vertical");
	var $nav_r = $(".nav_r");
	var $nav_l = $(".nav_l");
	var $nav_u = $(".nav_u");
	var $nav_d = $(".nav_d");
	var $nav_home = $(".nav_home");

$nav_r.click(function openRight(){

	$horizontal.animate({"margin-left":"-100vw"},slideSpeed);
    $vertical.animate({"margin-right":"200vw"},slideSpeed);
    position = 6;

});
$nav_l.click(function openLeft(){

	$horizontal.animate({"margin-left":"100vw"},slideSpeed);
    $vertical.animate({"margin-left":"200vw"},slideSpeed);
    position = 4;

});



$nav_d.click(function openDown(){

	$vertical.animate({"margin-top":"-700px"},slideSpeed);	
	position = 2;

});




$nav_u.click(function openUp(){

	$vertical.animate({"margin-top":"700px"},slideSpeed);
	position = 8;	

});

$nav_home.click(function(){

	if(position === 2){
		$vertical.animate({"margin-top":"0"},slideSpeed);
		position = 5;	
	}else if(position === 8){
		$vertical.animate({"margin-top":"0"},slideSpeed);
		position = 5;
	}else if(position === 4){
		$horizontal.animate({"margin-left":"0"},slideSpeed);
    	$vertical.animate({"margin-left":"100vw"},slideSpeed);
    	position = 5;
	}else{
		$horizontal.animate({"margin-left":"0"},slideSpeed);
	    $vertical.animate({"margin-right":"100vw"},slideSpeed);
	    position = 5;		
	}

});







});