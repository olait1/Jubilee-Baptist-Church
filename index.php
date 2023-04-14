<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>JBC - The Official Website of Jubilee Baptist Church Ogbomoso, Oyo State.</title>
		<link rel="shortcut icon" href="images/logop.png" type="image/x-icon">
		<!-- Loading third party fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="http://fonts.googleapis.com/css?family=Belgrano:400" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
	
		<link rel="stylesheet" href="give.css">
		

	</head>


	<body>
		<div class="site-content">
			<div class="site-header header-collapsed">
				<div class="container">
					<div class="header-bar">
						<a href="index.php" class="branding">
							<img src="images/logop.png" alt="" width="50" class="logo">
							<h1 class="site-title">Jubilee Baptist Church</h1>
						</a>
						<?php
						include_once("navbar.php");
						include_once("home.php");
						include_once("about.php");
						include_once("pastor.php");
						include_once("event.php");
						include_once("sermon.php");
						include_once("family.php");
						include_once("give.php");
						include_once("contact.php");
						include_once("map.php");
						?>






		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/give.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="js/app.js"></script>
		
	<script>

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
	
	dots:false,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});

	</script>
	</body>

</html>