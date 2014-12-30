$(document).ready(function(){
	var width= $(window).width();
	init_slider();
	$('head').append('<script src="js/ismobile.js"></script>')
	$('head').append('<script src="js/move.js"></script>')
	$('head').append('<script src="js/swipe.js"></script>')
	// $('body').append('<div class="hilfe"></div>')
	if(isMobile.android.phone==true){
		$('head').append('<link rel="stylesheet" href="css/android.css"/>')
	}


	if(isMobile.tablet){
		$('head').append('<link rel="stylesheet" href="css/android_tablet.css"/>');
	}

	function init_slider(){
		var size=$('#big_slider:not(.detailedslider) .row').size();


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


			if(width<=1024){
				$('#big_slider,.detailedslider').addClass('removebottom');

				$('#big_slider').css('margin-top','-'+$('#big_slider').height()/2-20+'px');

				
				$('#big_slider.detailedslider').css('margin-top','-'+($('#big_slider.detailedslider').height()/2)-5+'px');
				
				
			}else{
				$('#big_slider,.detailedslider').removeClass('removebottom');
				$('#big_slider,.detailedslider').css('margin-top','');
			}

			if(width<=1200){
				$('.spezialpadding').css('margin-top','0px')
			}else{
				$('.spezialpadding').css('margin-top','')
			}

			$('#big_slider').scrollLeft($('.activeslide').index()*width)
	});

	$(window).trigger('resize');

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


	$(document).on('click','a[expo]',function(){
		var showitem= $(this).attr('expo');
		$('.mainslider,.indicator,.icon-arrow-left,.icon-arrow-right,.detailedslider').addClass('active');
		$('.detailedslider .row[expo="'+showitem+'"]').addClass('active');
		$(window).trigger('resize');
		
	});

	$(document).on('click','.more_link_wrapper a[close]',function(){
		$('.mainslider,.indicator,.icon-arrow-left,.icon-arrow-right,.detailedslider,.detailedslider .row[expo]').removeClass('active');
	});

	

	$(document).on('click touchstart', '.logo_slider div', function(event) {
		var index=$(this).index();
		$('.logo_slider div').removeClass('active');
 		$(this).addClass('active')
		$('.logos').animate({scrollLeft:index*(350+5)}, 300,'easeInOutExpo');
	});


	$('#big_slider').on('swipeleft',function(e){
		$('.indicator .activeslide').next('div').trigger('click');
	});

	$('#big_slider').on('swiperight',function(e){
		$('.indicator .activeslide').prev('div').trigger('click');
	});

	$(document).on('click touchstart','.menu_resp_open',function(){
    	$('.menu_resp').toggleClass('active');
    });

});