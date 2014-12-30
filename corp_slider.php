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

	/*#big_slider,.indicator,.icon-arrow-left,.icon-arrow-right{
		opacity: 0;
	}*/

	footer ul li a{
		margin-top: -4px;
	}
	header a{
		margin-top: -1px;
	}

	#big_slider .img_wrapper{
		width: 1050px;
	}

	/*#big_slider.mainslider{
		bottom: 100px;
	}*/

	#big_slider.detailedslider{
		bottom: 93px;
	}
	#big_slider h1{
		margin-top: 40px
	}

	#big_slider{
		bottom: 80px;
	}

	.indicator {
		width: 170px;
		margin-left: -85px;
	}

	.logos{
		width:700px !important;
		margin-top: 45px !important;
		padding-bottom: 40px;
		margin: 0 auto;
	}

	.logos a{
		float:left;
		width: 160px;
		height: 160px;
		-webkit-transition: opacity 0.3s;
		-moz-transition: opacity 0.3s;
		-o-transition: opacity 0.3s;
		transition: opacity 0.3s;
		margin: 0 15px 15px 0px;
		-webkit-box-shadow: 3px 1px 16px -5px rgba(0,0,0,0.5);
        -moz-box-shadow: 3px 1px 16px -5px rgba(0,0,0,0.5);
		box-shadow: 3px 1px 16px -5px rgba(0,0,0,0.5);
	}

/*	.logos a:nth-child(6),
	.logos a:nth-child(12){
		margin: 0 20px 20px 0px;
	}

	.logo_slider{
		width: 60px;
		margin: 0 auto;
	}

	.logo_slider div{
		float: left;
		background: #ccc;
		text-indent: -9999px;
		display: block;
		width: 10px;
		height: 10px;
		margin: 0 5px;
		outline: 0;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-o-transition: all 0.3s;
		-ms-transition: all 0.3s;
	}*/

	.logo_slider div.active{
		background: #555;
	}

	.logo_slider div:hover{
		background: #555;
		cursor: pointer;
	}

	.withshadow{
	  -webkit-box-shadow: 3px 1px 16px -5px rgba(0,0,0,0.5);
      -moz-box-shadow: 3px 1px 16px -5px rgba(0,0,0,0.5);
	  box-shadow: 3px 1px 16px -5px rgba(0,0,0,0.5);
	}

	.logos a:hover{
		opacity: 0.6;
	}


	@media only screen and (max-width: 1200px){
		/*.logos{
			width: 600px !important;
			margin: 0 auto;
		}
		.logos a{
			width: 140px;
			height: 140px;
			margin: 0 10px 10px 0px;
		}*/


	}

	@media only screen and (max-width: 1200px){
		#big_slider .img_wrapper,
		.more_link_wrapper{
			width: 900px !important;
		}

/*		#big_slider .row{
			margin-top: 50px !important;	
		}*/
		

		/*.logos{
			width:350px !important;
			overflow: hidden;
			margin: 0 auto;
		}

		.logos_inner{
			width: 1090px;
			float: left;
		}*/

	}
	@media only screen and (max-width: 1024px){
		.logos a{
			width: 140px;
			height: 140px;
		}	
		.logos {
			width: 620px !important;
		}
	}
	

	@media only screen and (max-width: 800px){
		#big_slider .img_wrapper,
		.more_link_wrapper{
			width: 600px !important;
		}
	}

	@media only screen and (max-width: 600px){
		#big_slider .img_wrapper,
		.more_link_wrapper{
			width: 400px !important;
		}
	}

	.menu_resp{
		bottom: -440px;
	}

	.menu_resp_open{
		bottom: 10px;
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

	
	<div id="big_slider" class="mainslider">
		<div id="big_slider_inner">
			<div class="row" style="top:-13px">
				<div class="large-12 column">
					<div class="img_wrapper">
						<div class="logos">
							<div class="logos_inner">
								<a expo="1" href="#"><img src="img/slider/ci/einzeln/Hochheim.png"></a>
								<a expo="2" href="#"><img src="img/slider/ci/einzeln/fliesenwunsch.png"></a>
								<a expo="3" href="#"><img src="img/slider/ci/einzeln/horlache.png"></a>
								<a expo="4" href="#"><img src="img/slider/ci/einzeln/konsens.png"></a>
								<a expo="5" href="#"><img src="img/slider/ci/einzeln/gewobau.png"></a>
								<a expo="6" href="#"><img src="img/slider/ci/einzeln/rheingau.png"></a>
								<a expo="7" href="#"><img src="img/slider/ci/einzeln/saubermacher.png"></a>
								<a expo="8" href="#"><img src="img/slider/ci/einzeln/eltville.png"></a>
								<a expo="9" href="#"><img src="img/slider/ci/einzeln/texttech.png"></a>
								<a expo="10" href="#"><img src="img/slider/ci/einzeln/cware.png"></a>
								<a expo="11" href="#"><img src="img/slider/ci/einzeln/rescnet.png"></a>
								<a expo="12" href="#"><img src="img/slider/ci/einzeln/conarte.png"></a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="logo_slider">
					<div class="active"></div>
					<div></div>
					<div></div>
				</div> -->

				<div class="large-12 column">
					<h1 style="margin-top:9px;">Logos und Brands</h1>
					<p>Logo- und Markenentwicklung für Städte, Unternehmen und Institutionen.<br>
Stärkung von Profil, Wiedererkennungswert, Markenbindung und Akzeptanz. </p>
				</div>
			</div>


			<div class="row spezialpadding" style="top:73px">
				<div class="large-12 column">
					<div style="width:990px" class="img_wrapper">
						<img  src="img/slider/ci/briefpapier.png">
					</div>
				</div> 
				<div class="large-12 column" style="margin-top:10px">
					<h1>Briefpapier und Geschäftsausstattung</h1>
					<p>Geschäftsausstattungen kleineren, mittleren oder großen Umfangs bis hin zur <br>
Vorlagengestaltung für externe und interne Post, Formulare sowie Umschläge.
					</p>
				</div>
			</div>



			<div class="row spezialpadding" style="top:67px;">
				<div class="large-12 column">
					<div class="img_wrapper">
						<img src="img/slider/ci/cihandbuecher.png">

						<div class="more_link_wrapper">
							<div class="column large-4 small-4 middle-4"><a expo="13" href="#">mehr ></a></div>
							<div class="column large-4 small-4 middle-4"><a expo="14" href="#">mehr ></a></div>
							<div class="column large-4 small-4 middle-4"><a expo="15" href="#">mehr ></a></div>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Corporate Design Manuals und Styleguides</h1>
					<p>Konzeption von CD-Manuals und Styleguides als Grundlage zur einheitlichen <br>
und konsistenten Verwendung definierter Gestaltungsmuster und -vorlagen. 
</p>
				</div>
			</div>

			<div class="row spezialpadding" style="top:59px;">
				<div class="large-12 column">
					<div style="width:1065px" class="img_wrapper">
						<img src="img/slider/ci/markenkultur.png" style="margin-left: -50px;">
					</div>
				</div>
				<div class="large-12 column">
					<h1>Unternehmens- und Markenkultur</h1>
					<p>Umfangreiche Unterstützung des Wohndienstleisters gewobau Rüsselsheim in allen relevanten Bereichen visueller Kommunikation<br>
 wie interne und externe Post, Printmedien, Aussenwerbung, Internetauftritt sowie Fuhrparkbeschriftung.
					</p>
				</div>
			</div>
		</div>
	</div>



	<div id="big_slider" class="detailedslider">
		<div id="big_slider_inner">
			<div class="row" expo="1">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/Hochheim.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Stadt Hochheim am Main</h1>
					<p>Entwicklung des Stadtlogos der Wein- und Sektstadt Hochheim am Main in Verbindung mit <br>
Geschäftsausstattung und diversen Printmedien wie dem Theaterkalender Hochheim.</p>
				</div>
			</div>


			<div class="row" expo="2">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/fliesenwunsch.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Fliesen-Wunsch Sanitärfachhandel</h1>
					<p>Markenrelaunch für den Sanitärfachhändler Fliesenwunsch mit Entwicklung von Logo,<br>
Geschäftsausstattung, Aussenwerbung, Printmedien und Website.</p>
				</div>
			</div>

			<div class="row" expo="3">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/horlache.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Wohnprojekt Horlache-Park</h1>
					<p>Logoentwicklung für ein aus sechs Bauabschnitten bestehendes Wohnprojekt der <br>
gewobau Rüsselsheim am Naherholungsgebiet Horlachegraben.</p>
				</div>
			</div>


			<div class="row" expo="4">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/konsens.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Konsens Finanzdienstleister</h1>
					<p>Markenrelaunch für den Finanzdienstleister Konsens mit Logoentwicklung,<br>
Geschäftsausstattung und Entwurf diverser Printmedien.
</p>
				</div>
			</div>


			<div class="row" expo="5">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/gewobau.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Gewobau Wohndienstleister</h1>
					<p>Markenrelaunch für den Rüsselsheimer Wohndienstleister gewobau mit Logoentwicklung,<br>
					Geschäftsausstattung, Website und Entwurf diverser Printmedien.
					</p>
				</div>
			</div>




			<div class="row" expo="6">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/rheingau.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Kulturland Rheingau Tourismusdestination</h1>
					<p>Entwicklung der Wortmarke Kulturland Rheingau im Zuge des Markenaufbaus für <br>
die Tourismusdestination mit Corporate Design, Imagebroschüre, Aussenwerbung und Website.
					</p>
				</div>
			</div>


			<div class="row" expo="7">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/saubermacher.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Die Saubermacher Facility Management</h1>
					<p>Logoentwicklung für die Facility Management Division der gewobau Rüsselsheim<br>
im Zuge der gestalterischen Umsetzung einer Fuhrparkbeschriftung.
					</p>
				</div>
			</div>


			<div class="row" expo="8">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/eltville.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Stadt Eltville am Rhein</h1>
					<p>Entwicklung des Stadtlogos der Wein- und Sekt- und Rosenstadt Eltville am Rhein in Verbindung <br>
mit CD-Styleguide, Geschäftsausstattung, Aussenwerbung und diversen Printmedien.
					</p>
				</div>
			</div>


			<div class="row" expo="9">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/texttech.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Text-Tech IT-Consulting</h1>
					<p>Logoentwicklung für den IT-Entwickler Text-Tech in Verbindung <br>
mit Geschäftsausstattung und diversen Printmedien.

					</p>
				</div>
			</div>



			<div class="row" expo="10">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/cware.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>C-Ware IT-Consulting</h1>
					<p>Logoentwicklung für den IT-Entwickler C-Ware in Verbindung <br>
mit Geschäftsausstattung, Website und diversen Printmedien.

					</p>
				</div>
			</div>

			<div class="row" expo="11">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/rescnet.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Rescnet IT-Consulting</h1>
					<p>Logoentwicklung für den IT-Entwickler Rescnet Ltd. in Verbindung <br>
mit Geschäftsausstattung und diversen Printmedien.

					</p>
				</div>
			</div>


			<div class="row" expo="12">
				<div class="large-12 column">
					<div style="width:402px !important" class="img_wrapper">
						<img class="withshadow" src="img/slider/ci/einzeln/conarte.png">
						<div class="more_link_wrapper" style="width:402px !important;margin-top:20px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>con Arte Manufaktur</h1>
					<p>Logoentwicklung für die Bilderrahmen-Manufaktur Con Arte in Verbindung <br>
mit Geschäftsaustattung, Imagebroschüre und diversen Printmedien.


					</p>
				</div>
			</div>


			<div class="row" expo="13">
				<div class="large-12 column">
					<div style="width:947px" class="img_wrapper">
						<img src="img/slider/ci/eltville.png">
						<div class="more_link_wrapper" style="width:947px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Gestaltungsleitfaden Eltville am Rhein</h1>
					<p>Der Gestaltungsleitfaden Eltville am Rhein beinhaltet Vorlagenmuster für externe und interne Post, <br>
Formularentwürfe, Anzeigen sowie für Printmedien.
					</p>
				</div>
			</div>


			<div class="row" expo="14" style="top:18px;">
				<div class="large-12 column">
					<div style="width:947px" class="img_wrapper">
						<img src="img/slider/ci/rheingau.png">
						<div class="more_link_wrapper" style="width:947px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Corporate Design Manual Rheingau</h1>
					<p>Im Zuge des Markenaufbaus der Tourismusdestination Kulturland Rheingau definiert das <br>
CD-Manual umfangreiche Verwendungsmuster von der Logoplazierung auf der Visitenkarte <br>
bis hin zu komplexen Layouts, z.B. für öffentliche Wegweisertafeln.
					</p>
				</div>
			</div>

			<div class="row" expo="15">
				<div class="large-12 column">
					<div style="width:947px" class="img_wrapper">
						<img src="img/slider/ci/moerfelden.png">
						<div class="more_link_wrapper" style="width:947px">
							<a close href="#">zurück zur Übersicht</a>
						</div>
					</div>
				</div>
				<div class="large-12 column">
					<h1>Styleguide Mörfelden-Walldorf</h1>
					<p>Der Styleguide Mörfelden-Walldorf definiert Vorlagenmuster für externe und interne Post, <br>
Formulare, Anzeigen sowie für Printmedien.
					</p>
				</div>
			</div>











		</div>
	</div>


	<?php include ("footer.php"); ?>		
	<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){
			$('#big_slider,.indicator,.icon-arrow-left,.icon-arrow-right').animate({opacity:1}, 750,function(){
				$('div[bg]').addClass('always');	
			});
		},100);

		// $(window).on('resize orientationchange',function(){

		// 	if($(window).width()<=1024){
		// 		$('#big_slider').addClass('removebottom');
		// 		$('#big_slider').css('margin-top','-'+$('#big_slider').height()/2-20+'px');
		// 	}else{
		// 		$('#big_slider').removeClass('removebottom');
		// 		$('#big_slider').css('margin-top','');
		// 	}

		// })


	});
	</script>

</body>
</html>