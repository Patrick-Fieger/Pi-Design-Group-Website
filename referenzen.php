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
		margin-bottom: -24px;
	}
	div[bg]{
		right: 0 !important
	}

	.text{
		margin-top: 20px;
		width: 100%;
	}

	div[bg]{
		opacity: 0;
	}

	.website_wrapper{
		opacity: 0;
		position: fixed;
		bottom: 220px;
		left: 50%;
		margin-left: -470px;
		z-index: 1000;
		width: 906px;
	}

	.website_wrapper a{
		position: absolute;margin-top: -5px;
	}

	.always{
		opacity: 1 !important;
	}

	</style>
</head>
<body>
	<?php include ("header.php"); ?>
	


		<div style="background:url(img/background_agentur/Bachground_Agentur.png);" bg="0" class="bg1"></div>

		<div class="website_wrapper">

			<div class="text">
				<div class="websites active">
				<h1 style="margin-bottom:20px">Referenzen</h1>
				<p style="margin-bottom:40px">Bauer Biotec GmbH / Controlware GmbH / Clariant GmbH / db Soft GmbH <br>
Dekom Verlags GmbH / Deutsche Bank AG / Hama GmbH / Holtz GmbH<br>
Ilchmann Fördertechnik GmbH / IQ Institut für Qualitätsentwicklung Hessen<br>
Egana GmbH / gewobau Rüsselsheim / Lancaster Group / LSA Landesschulamt <br>
und Lehrkräfteakademie / Kurbetriebe Bad Schwalbach / Mainz Marketing<br>
Maritim Hotels / Orthopädische Klinik Wiesbaden / Pfungstädter Brauerei <br>
Reinecker Rehatechnik GmbH / Rüdesheim Assmannshausen Touristik AG<br>
Shinetsu Deutschland / Sieper Werke GmbH / Stadt Hochheim am Main<br>
Stadt Eltville am Rhein / Stadtentwicklungsgesellschaft Rüsselsheim  <br>
Stadt Mörfelden-Walldorf / Stadt Rüsselsheim / Stadtwerke Rüsselsheim<br>
Top Hair GmbH / Terratec GmbH / Wella GmbH / Zweckverband Rheingau</p>
				
				<a class="show_intro_text" href="#">zurück</a>			
			</div>
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

		// blink();

		// function blink(){
		// 	$('.websites a').animate({opacity:0.2}, 750,function(){
		// 		$('.websites a').animate({opacity:1}, 750,function(){
		// 			blink();
		// 		});
		// 	});
		// }
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