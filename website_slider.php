<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pi Design Group Darmstadt</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/foundation.css"/>
	
	<script src="js/custom.modernizr.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/easing.js"></script>
	<script src="js/jquery.debouncedresize.js"></script>
	<script src="js/slider.js"></script>
	<style type="text/css">
	.bg1{
		opacity: 1 !important;
		background-color: #ffffff !important;
		background-image: -webkit-gradient(linear, left top, left bottom, from(rgb(255, 255, 255)),to(rgb(218, 225, 230))) !important;
		background-image: -webkit-linear-gradient(top, rgb(255, 255, 255), rgb(218, 225, 230)) !important;
		background-image: -moz-linear-gradient(top, rgb(255, 255, 255), rgb(218, 225, 230)) !important;
		background-image: -o-linear-gradient(top, rgb(255, 255, 255), rgb(218, 225, 230)) !important;
		background-image: -ms-linear-gradient(top, rgb(255, 255, 255), rgb(218, 225, 230)) !important;
		background-image: linear-gradient(top, rgb(255, 255, 255), rgb(218, 225, 230)) !important;
		filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#ffffff', EndColorStr='#dae1e6');
	}

	div[bg]{
		width: 100%;
	}

	#big_slider,.indicator,.icon-arrow-left,.icon-arrow-right{
		opacity: 0;
	}

	footer ul li a{
		margin-top: -4px;
	}
	header a{
		margin-top: -1px;
	}

	</style>
</head>
<body>
	<?php include ("header.php"); ?>
	


	<div bg="0" class="bg1"></div>
	<div class="indicator">
	</div>

	<div class="icon-arrow-left"></div>
	<div class="icon-arrow-right"></div>

	
	<div id="big_slider">
		<div id="big_slider_inner">
			<div class="row">
		<div class="large-12 column">
			<div class="img_wrapper">
				<img src="img/slider/1.png">
			</div>
		</div>
		<div class="large-12 column">
			<h1>Website Justem Rechtsanwälte</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div>
			</div>
		
			<div class="row">
				<div class="large-12 column">
					<div class="img_wrapper">
						<img src="img/slider/1.png">
					</div>
				</div>
				<div class="large-12 column">
					<h1>WEBSITE TEST HEADER</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
		
			<div class="row">
				<div class="large-12 column">
					<div class="img_wrapper">
						<img src="img/slider/1.png">
					</div>
				</div>
				<div class="large-12 column">
					<h1>WEBSITE TEST HEADER</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
		</div>
	</div>






	<?php include ("footer.php"); ?>		
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		setTimeout(function(){
			$('#big_slider,.indicator,.icon-arrow-left,.icon-arrow-right').animate({opacity:1}, 750,function(){
				$('div[bg]').addClass('always');	
			});
		},100);


		blink();

		function blink(){
			$('.websites a').animate({opacity:0.2}, 400,function(){
				$('.websites a').animate({opacity:1}, 400,function(){
					blink()
				});
			});
		}
	});
	</script>
	<script>
		$(document).foundation();
  	</script>
  	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );


		$('#gn-menu').addClass('other_all')
	</script>
</body>
</html>