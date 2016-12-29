$(document).ready(function(){


$(document).keydown(function(e) {
    switch(e.which) {
        case 37: if(position == 4){
        	backToHome();
        }else{
        	goLeft();
        }
        break;

        case 38: if(position == 8){
        	backToHome();
        }else{
        	goUp();
        }
        break;

        case 39: if (position == 6){
        	backToHome();
        }else{
        	goRight();
        }
        break;

        case 40: if(position == 2){
        	backToHome();
        }else{
        	goDown();
        }
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});

	


	var slideSpeed = 1000;
	var position = 5; /*position by numkeypad '5 means center'*/ 
	var $horizontal = $(".horizontal");
	var $vertical = $(".vertical");
	var $center = $("#center");
	var $c_main = $("#center>main");
	var $c_header = $("#center header");
	var $nav_r = $(".nav_r");
	var $nav_l = $(".nav_l");
	var $nav_u = $(".nav_u");
	var $nav_d = $(".nav_d");
	var $nav_home = $(".nav_home");



/*setTimeout(function(){
	$center.css("background-image","url(./img/background3.jpg)");
	setTimeout(function(){
		$c_main.css("transform","scale(100)");
		$c_main.show(500);
		$c_main.css("transform","scale(1)");
	},1500);
},2000);

*/
setTimeout(function(){
	$c_main.css("transform","scale(50) rotate(15deg)");
	$c_main.show(500);
	$c_main.css("transform","scale(1) rotate(15deg)");
	setTimeout(function(){
		$c_main.css("transform","scale(1)");
		setTimeout(function(){
			$c_header.fadeIn(500);
		},2000)
	},2000)
},2000);





function goRight(){


	if(position === 5){
		$horizontal.animate({"margin-left":"-100vw"},slideSpeed);
	    $vertical.animate({"margin-left":"0"},slideSpeed);
	    position = 6;	
	}else{
		backToHome();
		goRight();
    	position = 6;
    }

}

function goLeft(){


	if(position === 5){
		$horizontal.animate({"margin-left":"100vw"},slideSpeed);
	    $vertical.animate({"margin-left":"200vw"},slideSpeed);
	    position = 4;
	}else{
		backToHome();
		goLeft();
    	position = 4;
    }

}



function goDown(){

	if(position === 5){
		$vertical.animate({"margin-top":"-100vh"},slideSpeed);	
		position = 2;	
	}else{
		backToHome();
		goDown();
    	position = 2;
    }


}




function goUp(){

	if(position === 5){
		$vertical.animate({"margin-top":"100vh"},slideSpeed);
		position = 8;	
	}else{
		backToHome();
		goUp();
    	position = 8;
    }

}

function backToHome(){

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
	    $vertical.animate({"margin-left":"100vw"},slideSpeed);
	    position = 5;		
	}

}

$nav_home.click(backToHome);
$nav_r.click(goRight);
$nav_l.click(goLeft);
$nav_u.click(goUp);
$nav_d.click(goDown);



$("a").bind("click",function(event){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 999);

});


/*	$(window).scroll(function(){
		if($(window).scrollTop()>510){
			$(".navbar").css("background-color","green");
		}else{
			$(".navbar").css("background-color","transparent");
		}

	});
*/
});