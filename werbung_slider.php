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

	.indicator{
		width: 408px;
		margin-left: -204px;
	}

	footer ul li a{
		margin-top: -4px;
	}
	header a{
		margin-top: -1px;
	}

	#big_slider .img_wrapper{
		width: 1052px;
	}

	#big_slider{
		bottom: 90px;
	}

	.indicator {
		width: 136px;
		margin-left: -68px;
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
						<img src="img/slider/werbung/rollup.png">
					</div>
				</div>
				<div class="large-12 column">
					<h1>Werbedispays für Messe und Promotion</h1>
					<p>Konzeption und Umsetzung werbewirksamer und kostengünstiger<br>
Gesamtlösungen für Aussenwerbung, Messewerbung, Event und Promotion.</p>
				</div>
			</div>

			<div class="row">
				<div class="large-12 column">
					<div class="img_wrapper">
						<img src="img/slider/werbung/grossplakate.png">
					</div>
				</div>
				<div class="large-12 column">
					<h1>Großplakatserie Rüsselsheim</h1>
					<p>Großangelegte Werbekamgagne mit Konzeption und Umsetzung von insgesamt <br>
sechs Imagemotiven zum Thema automotiver Standort Rüsselsheim.</p>
				</div>
			</div>

			<div class="row" style="top:-3px;">
				<div class="large-12 column">
					<div class="img_wrapper">
						<img src="img/slider/werbung/crossover.png">
					</div>
				</div>
				<div class="large-12 column">
					<h1>Crossover-Kampagne Wohnen in Rüsselsheim</h1>
					<p>Crossover-Kampagne für den Wohnstandort Rüsselsheim mit interaktiven Bausteinen wie<br>
Website, Online-Newsletter und -Gewinnspiele sowie POP-Aktionen (Point of Purchase). </p>
				</div>
			</div>

			<div class="row">
				<div class="large-12 column">
					<div style="width: 840px;" class="img_wrapper">
						<img src="img/slider/werbung/pos.png">
					</div>
				</div>
				<div class="large-12 column">
					<h1>POS-Kampagne für Pfungstädter</h1>
					<p>Kampagnen für die Pfungstädter Brauerei mit Eventthemen wie Fussball-EM oder Weihnachtsaktion.<br>
Konzeption und Organisation von POS-Prämien- und Gewinnspielen. </p>
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
		$('#gn-menu').remove();
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