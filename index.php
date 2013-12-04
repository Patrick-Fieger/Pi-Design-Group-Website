<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pi Design Group Darmstadt</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content=" initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 
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
		.description div{
			left:50%;
		}
		.description div[slide]{
			left: 40px;
		}
		.images div{
			background-position: bottom left;
		}
		.description div{
			position: absolute;
			opacity: 0;
		}
		.images div.active,.description div.active{
			opacity: 1;
		}
		.description h1{
			text-align: left;
			font-family: 'kl' !important;
			font-size: 65px;
			margin: 0;
			padding: 0;
			line-height: 60px;
		}
		.description h2{
			margin: 5px 0 0 0;
			text-align: left;
			font-family: 'kl' !important;
			font-size: 25px;
			font-weight: normal;
		}
		.large-4{
			width: 530px;
		}
		.large-8{
			float: left !important;

		}

		div[bg]{
			left: 0;
		}
	</style>
</head>
<body style="opacity:0">
	<?php include ("header.php"); ?>
	
	<div class="indicator">
		<div class="activeslide"></div>
		<div></div>
		<div></div>
		<div></div>
	</div>

	<div style="opacity:1" bg="0" class="bg1"></div>
	<div bg="1" class="bg2"></div>
	<div bg="2" class="bg3"></div>
	<div bg="3" class="bg4"></div>

	<div class="wrapper_slider play">
		<div class="wrapper_slider_inner">
			<div class="row active_slider" slideon="on" id="slider">
				<div class="large-4 column description">
					<div class="active" slide="1">
						<h1>Websites</h1>
						<h2>Design, Coding, CMS, SEO</h2>
					</div>
					<div slide="2">
						<h1>Printmedien</h1>
						<h2>Design, Preprint, Produktion</h2>
					</div>
					<div style="margin-left:-100px" slide="3">
						<h1>Corporate Design</h1>
						<h2>Logos, Markenaufbau, Unternehmenskultur</h2>
					</div>
					<div slide="4">
						<h1>Werbung</h1>
						<h2>Medienplanung, Kampagnen, Events</h2>
					</div>
				</div>
				<div class="images" style="left:300px;">
					<img src="img/intro/exponat_intro1.png">
					<img src="img/intro/exponat_intro2.png">
					<img src="img/intro/exponat_intro3.png">
					<img src="img/intro/exponat_intro4.png">	
				</div>
			</div>
		</div>
	</div>
	<div class="row sites">
		<div class="large-6 column text">
			<div class="websites active">
				<h1>Websites</h1>
				<p>Wie präsentiere ich mich am besten im Internet und welche Inhalte sollten wie dargestellt werden?</p>
				<p>Fordern Sie unsere Kompetenzen, um die Möglichkeiten des Internets für Ihr Unternehmen optimal zu nutzen. Von der Konzeption bis zum Onlinemarketing stehen Ihnen Speziali- sten zur Seite.</p>

				<p class="bold">Unsere Leistungen</p>
				<ul>
					<li>– Konzeption / Strukturierung / Layout</li>
					<li>– Fotoproduktion</li>
					<li>– Suchmaschinenoptimierte Texte</li>
					<li>– Suchmaschinenoptimierte Programmierung</li>
					<li>– Beratung / Betreuung / Pflege / Hosting</li>
					<li>– Onlinemarketing</li>
				</ul>
				<a href="slider.php">Arbeitsbeispiele Ansehen</a>
			</div>

			<div class="printmedien">
				<h1>Printmedien</h1>
			</div>
			<div class="corporatedesign">
				<h1>Corporate Design</h1>
			</div>
			<div class="werbung">
				<h1>Werbung</h1>
			</div>
		</div>
		<div class="large-6 column img">
			<img class="websites active" src="img/1.jpg">
			<img class="printmedien" src="img/2.jpg">
			<img class="corporatedesign" src="img/3.jpg">
			<img class="werbung" src="img/4.jpg">
		</div>
	</div>
	<div class="back_grad"></div>


	<?php include ("footer.php"); ?>		
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	// $(document).ready(function(){
	// 	var width=$(window).width()-250;
	// 	$('.images').width(width)
	// });
	</script>
	<script>
		$(document).foundation();
  	</script>
  	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
	</script>
</body>
</html>