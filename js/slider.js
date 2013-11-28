$(document).ready(function(){
	var width= $(window).width();
	init_slider();


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





	

	$(document).on('click', '.indicator div', function(event) {
		var index=$(this).index();

		$('.indicator div').removeClass('activeslide');
 		$(this).addClass('activeslide')

		$('#big_slider').animate({scrollLeft:index*width}, 1000,'easeInOutExpo');

	});





	$(document).on('click','.icon-arrow-left,.icon-arrow-right',function(){
		var direction;

		if($(this).attr('class')=="icon-arrow-left"){
			$('.indicator .activeslide').prev('div').trigger('click')
		}else{
			$('.indicator .activeslide').next('div').trigger('click')
		}


	});



});