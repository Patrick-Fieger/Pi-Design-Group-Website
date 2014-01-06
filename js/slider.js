$(document).ready(function(){
	var width= $(window).width();
	init_slider();
	$('head').append('<script src="js/ismobile.js"></script>')
	$('head').append('<script src="js/move.js"></script>')
	$('head').append('<script src="js/swipe.js"></script>')

	if(isMobile.android.phone==true){
		$('head').append('<link rel="stylesheet" href="css/android.css"/>')
	}


	if(isMobile.tablet){
		$('head').append('<link rel="stylesheet" href="css/android_tablet.css"/>');
	}

	function init_slider(){
		var size=$('#big_slider .row').size();


		for (var i = 0; i < size; i++) {
			$('.indicator').append('<div></div>')
		};

		$('#big_slider').width(width);

		$('#big_slider_inner').width(size*width);
		$('#big_slider .row').css('min-width',width);
		$('#big_slider .row').css('max-width',width);
		$('.indicator div:first-child').addClass('activeslide')
	}


	$(window).on('resize orientationchange',function(){
			width= $(window).width();
			var size=$('#big_slider .row').size();
			$('#big_slider').width(width);
			$('#big_slider_inner').width(size*width);
			$('#big_slider .row').css('min-width',width);
			$('#big_slider .row').css('max-width',width);
	});

	$(document).on('click touchstart', '.indicator div', function(event) {
		var index=$(this).index();
		$('.indicator div').removeClass('activeslide');
 		$(this).addClass('activeslide')
		$('#big_slider').animate({scrollLeft:index*width}, 1000,'easeInOutExpo');
	});

	$(document).on('click touchstart','.icon-arrow-left,.icon-arrow-right',function(){
		if($(this).attr('class')=="icon-arrow-left"){
			if($('.indicator .activeslide').prev('div').length!==0){
				$('.indicator .activeslide').prev('div').trigger('click')	
			}else{
				$('.indicator div:last-child').trigger('click')	
			}


			
		}else{
			if($('.indicator .activeslide').next('div').length!==0){
				$('.indicator .activeslide').next('div').trigger('click');
			}else{
				$('.indicator div:first-child').trigger('click')
			}

			
		}
	});

	$('#big_slider').on('swipeleft',function(e){
		$('.indicator .activeslide').next('div').trigger('click');
	});

	$('#big_slider').on('swiperight',function(e){
		$('.indicator .activeslide').prev('div').trigger('click');
	});


});