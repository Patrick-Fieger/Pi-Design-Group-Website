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
	<script src="js/script.js"></script>
	<style type="text/css">
	li{
		line-height: 18px;
	}
	h1{
		margin-bottom: 3px;
		font-family: kl !important;
		font-size: 65px;
	}

	p{
		line-height: 18px;

	}

	.websites a{
		font-size: 19px;
		font-family: km !important;
	}
	.text,.img{
		float: left; 
		z-index: 33;
	}
	.img{
		margin-left: -110px;
	}

	div[bg]{
		right: 0 !important
	}

	.text{
		margin-top: -10px;
	}

	div[bg]{
		opacity: 0;
				background-repeat: no-repeat !important;
		width: 100%;
		background-position-x: 50% !important;
	}

	.website_wrapper{
		opacity: 0;
		position: fixed;
		bottom: 90px;
		left: 50%;
		margin-left: -510px;
		z-index: 1000;
		width: 1256px;
	}

	.always{
		opacity: 1 !important;
	}

	</style>
</head>
<body>
	<?php include ("header.php"); ?>
	


		<div style="background:url(img/background_werbung/Background_Einleitungsseite_Werbung.png);" bg="0" class="bg1"></div>

		<div class="website_wrapper" wrapper="3">

			<div class="text">
			<div class="websites">
				<h1>Werbung</h1>
				<p style="margin-bottom:40px">Wir beraten und unterstützen Sie umfassend in den Bereichen <br>
				klassische Werbung, Verkaufsförderung sowie bei New Media<br> Marketing wie Online- und Crossover-Kampagnen</p>

				<p style="font-size:18px;margin-bottom:17px" class="midbold">Unsere Leistungen</p>
				<ul style="margin-bottom:40px">
					<li>– Mediaplanung</li>
					<li>– Anzeigen / Großplakatwerbung</li>
					<li>– Crossover-Kampagnen</li>
					<li>– Onlinemarketing</li>
					<li>– Mailings</li>
					<li>– Eventplanung</li>
				</ul>



				
				<a href="website_slider.php">Arbeitsbeispiele ansehen</a>
			</div>
			</div>
			
			<div class="img">
				<img style="margin-bottom:-20px;" class="websites" src="img/intro/exponat_intro4.png">
			</div>

		</div>

		<div class="back_grad"></div>



	<?php include ("footer.php"); ?>		
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		setTimeout(function(){
			$('.website_wrapper,div[bg]').animate({opacity:1}, 750,function(){
				$('div[bg]').addClass('always');	
			});
		},100)

		blink();

		function blink(){
			$('.websites a').animate({opacity:0.2}, 750,function(){
				$('.websites a').animate({opacity:1}, 750,function(){
					blink();
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