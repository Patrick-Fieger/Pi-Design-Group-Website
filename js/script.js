$(document).ready(function(){

$('head').append('<script src="js/ismobile.js"></script>')
$('head').append('<script src="js/move.js"></script>')
$('head').append('<script src="js/swipe.js"></script>')

	var width=$(window).width();
	height=$(window).height(),
	elem=$('.wrapper_slider_inner').find('.row').size(),

	leftwidth=($('.description').width()+300)*3,
	rightwidth=($('.images').width()+300)*3,

	slidewidth= $(window).width()+500,
	slidetempo=400,
	waitforchange=6000,
	easing="easeInOutExpo",
	rightpos= "20px";


	if(isMobile.phone==true){
		$('div[bg]').height(height-37);
		// $('div[bg]').height($(window).height())
		// $('div[bg]').width($(window).width())
		// setTimeout(function(){
		// 	alert($('div[bg]').css('botttom'))
		// },3000);
		
	}else{
		$('div[bg]').height(height-72);
	}

	if(isMobile.tablet){
		$('head').append('<link rel="stylesheet" href="css/android_tablet.css"/>');
	
	}

	if(isMobile.android.phone==true){
		$('head').append('<link rel="stylesheet" href="css/android.css"/>');
	}


	$('.wrapper_slider').on('swipeleft',function(e){
		$('.indicator div.activeslide').next('div').trigger('click');
	});

	$('.wrapper_slider').on('swiperight',function(e){
		$('.indicator div.activeslide').prev('div').trigger('click');
	});


	if(isMobile.android.phone==true){
		$('head').append('<link rel="stylesheet" href="css/android.css"/>')
	}

	$('.wrapper_slider_inner').css('width',width*elem);
	$('.row#slider').css('max-width',width);
	
	$(window).load(function(){
		// $('body').animate({opacity:1}, 1000);
		$('.gn-menu-main').hide();
		$('.gn-menu-main').css('opacity',1)
	});	

	$('body').animate({opacity:1}, 1000);
	

	$(window).resize(function(){
    	width=$(window).width();
    	slidewidth= $(window).width()+500
		elem=$('.wrapper_slider_inner').find('.row').size();
		console.log(width)

		leftwidth=$('.description').width()+300;
		rightwidth=$('.images').width()+300;
		$('div[bg]').height(height-72);
		$('.wrapper_slider_inner').css('width',width*elem);
		$('.row#slider').css('max-width',width);
	});

	$('.images').children('img').each(function(){
		var src=$(this).attr('src');
		var zahl=src.replace(/[^0-9]/g,'');
		$(this).attr('slide',zahl)
		$('.images img:first-child').addClass('active');
	});

	setInterval(function(){
		if(!$('.indicator').hasClass('dontmove')){
			if($(".description .active").next("div").length > 0){
				jump();
			}else{
				jumpfirst();
			}
		}
	},waitforchange)

	function jump(){
			$('div[bg]').animate({opacity: 0},slidetempo);
			$('.images').animate({left:slidewidth},slidetempo,easing);
 			$('.description').animate({left:'-'+leftwidth},slidetempo,easing,function(){
			
 			$(".description .active").removeClass('active').next("div").addClass('active');
 			$(".images .active").removeClass('active').next("img").addClass('active');
 			var imgindex=$('.images .active').index();

 			$('.indicator div').removeClass('activeslide');
 			$('.indicator').find('div').eq(imgindex).addClass('activeslide')

 			$('div[bg="'+imgindex+'"]').animate({opacity: 1}, slidetempo)
 			$('.description').animate({left:0},slidetempo,easing)
 			$('.images').animate({left:'0px'},slidetempo,easing);	
 		});
	}

	function jumpfirst(){
			$('div[bg]').animate({opacity: 0},slidetempo);	
			$('.description').animate({left:'-'+leftwidth},300,easing);
    		$('.images').animate({left:slidewidth},300,easing,function(){
    		$(".description div,.images img").removeClass('active');
    		$(".description div:first-child,.images img:first-child").addClass('active');
    		
	
    		var imgindex=$('.images .active').index();
	
    		$('.indicator div').removeClass('activeslide');
    		$('.indicator').find('div').eq(imgindex).addClass('activeslide')
	
    		
    		$('.description').animate({left:0},slidetempo,easing)
    		$('.images').animate({left:'0px'},slidetempo,easing);
    		$('div[bg="'+imgindex+'"]').animate({opacity: 1}, slidetempo)
		});
    }


    $('.indicator').hover(function() {
    	$(this).addClass('dontmove')
    }, function() {
    	$(this).removeClass('dontmove')
    });


    $(document).on('click touchstart','.indicator div',function(){
    	var index=$(this).index();
    	$('div[bg]').animate({opacity: 0},300);
    	$('.images').animate({left:slidewidth},slidetempo,easing);
 		$('.description').animate({left:'-'+leftwidth},slidetempo,easing,function(){
		
 		$(".description div,.images img").removeClass('active');
 		
 		$('.description').find('div').eq(index).addClass('active');
 		$('.images').find('img').eq(index).addClass('active');


 			var imgindex=$('.images .active').index();
 			checkactive();
 			
 			$('.description').animate({left:0},slidetempo,easing)
 			$('.images').animate({left:'0px'},slidetempo,easing);
 			$('div[bg="'+imgindex+'"]').animate({opacity: 1}, 300)
 		});
    });

    function checkactive(){
    	var imgindex=$('.images .active').index();
 		$('.indicator div').removeClass('activeslide');
 		$('.indicator').find('div').eq(imgindex).addClass('activeslide')
    }

});