﻿<!-- 
Auteur : Nicolas Six
Date de création: 18/04/16
Description : Miroir connecté - page d'accueil
Librairies utilisées : Bootstrap, Jquery -->

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="assets/css/miroir.css">
		<link rel="stylesheet" href="assets/css/flipclock.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/miroir.js"></script>
		<script src="assets/js/openWeather.js"></script>
		<script src="assets/js/flipclock.js"></script>
		<script> 
			$(document).ready(function() {
				loadJS();
			});
		</script>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
			  <div class="weather-wrapper weatherModule">

					<div align="center">
						<h2><span class="weather-description capitalize"></span></h2>
						<img src="" class="weather-icon" alt="Weather Icon" />
					</div>
					<hr/>
					
					<p><strong>Lieu :</strong>
					<br /><span class="weather-place"></span></p>
					<hr/>
					
					<p><strong>Température :</strong>
					<br /><span class="weather-temperature"></span> (<span class="weather-min-temperature"></span> - <span class="weather-max-temperature"></span>)</p>
					<hr/>
					
					<p><strong>Humidité :</strong>
					<br /><span class="weather-humidity"></span></p>
					<hr/>
					
					<p><strong>Vitesse du vent :</strong>
					<br /><span class="weather-wind-speed"></span></p>
					<hr/>
					
					<p><strong>Lever de soleil :</strong>
					<br /><span class="weather-sunrise"></span></p>
					<hr/>
					
					<p><strong>Coucher de soleil :</strong>
					<br /><span class="weather-sunset"></span></p>
				
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 hourFrame" align="center">
						<h1 align="center">Bonjour ! Vous semblez en forme !</h1><hr/><br/>
						<marquee direction="right"><div class="your-clock" align="center"></div></marquee>
					</div>
				</div><br/>
				<div class="row">
					<div id="newsTitle"><h2>Dernières actualités en France :</h2></div>
					<div id="newsFrame"></div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>