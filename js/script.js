$(document).ready(function(){

	var slideSpeed = 2000;

$(".nav_r").click(function(){

	$(".horizontal").animate({"margin-left":"-100vw"},slideSpeed);
    $(".vertical").animate({"margin-right":"200vw"},slideSpeed);

});
$(".nav_l").click(function(){

	$(".horizontal").animate({"margin-left":"100vw"},slideSpeed);
    $(".vertical").animate({"margin-left":"200vw"},slideSpeed);

});



$(".nav_d").click(function(){

	$(".vertical").animate({"margin-top":"-700px"},slideSpeed);	

});




$(".nav_u").click(function(){

	$(".vertical").animate({"margin-top":"700px"},slideSpeed);	

});







});