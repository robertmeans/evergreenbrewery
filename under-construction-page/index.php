<!doctype html>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design
  Contact:      robert@evergreenwebdesign.com
                (303) WEBSITE
                that's (303) 932.7483
  Last Update:  October 01, 2017
  Comments:     You look very nice today! :)
-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Evergreen Brewery - Evergreen, Colorado Brewery and Tap House</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Courgette|Lato|Architects+Daughter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcS8gagJkuoY6gB3utE1iyZnWk4JG5Suw&callback=initMap"></script>
	<script src="js/google-map.js"></script>
	
</head>
<body>
<?php include_once("_includes/analyticstracking.php") ?>

<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<nav>
	<ul>
		<li><a href="#menu-container" class="main-nav no-active-nav">Beer</a></li>
		<li><a href="#menu" class="main-nav no-active-nav">Menu</a></li>
		<li><a href="#contact" class="main-nav">Find Us</a></li>
	</ul>
	<div class="phone large-gone">
		<a class="phone-nav" tabIndex="-1" href="tel:(303)%20736-8419">(303) 736-8419</a>
	</div>
</nav>

<section id="intro">
	<div class="uc">
		<img src="_images/under-construction.png">
		<div class="uc-dark">
				<h2>Evergreen Brewery<br />&amp; Tap House</h2>
				<!-- <p>&nbsp;</p>
				<h3><i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp; Come see us at GABF! Booth X15! &nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i></h3> -->
				<p>&nbsp;</p>
				<p>Check us out on social media!</p>
				<div class="social-links">
					<a class="reset" href="https://www.facebook.com/evergreenbreweryandtaphouse/" target="_blank"><img src="_images/facebook.png" alt="Follow us on Facebook"></a><a class="reset" href="https://www.instagram.com/evergreenbrewerytaphouse/" target="_blank"><img src="_images/instagram.png" alt="Follow us on Instagram"></a>
				</div>
				<p>&nbsp;</p>
				<p><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>&nbsp;&nbsp; Menu &amp; current beer selection below &nbsp;&nbsp;<i class="fa fa-arrow-circle-down" aria-hidden="true"></i></p>
		</div>
	</div>
</section><!-- #intro -->

<section id="menu-container">
<?php // do not remove this section
      // content dynamically populates and is embedded
      // into this area. you cannot see it in the source code.
?>
</section>
<section id="taphunter">
	<script type="text/javascript">
	  !function(e,n){var t=document.createElement("script"),a=document.getElementsByTagName("script")[0];t.async=1,a.parentNode.insertBefore(t,a),t.onload=t.onreadystatechange=function(e,a){(a||!t.readyState||/loaded|complete/.test(t.readyState))&&(t.onload=t.onreadystatechange=null,t=void 0,a||n&&n())},t.src=e}("https://embed-menu-preloader.untappdapi.com/embed-menu-preloader.min.js",function(){PreloadEmbedMenu("menu-container",3187,9224)});
	</script>
</section><!-- #taphunter -->

<div id="menu">
<?php require('_includes/starters.php'); ?>
<?php require('_includes/soups-salads.php'); ?>
<?php require('_includes/sandwiches.php'); ?>
<?php require('_includes/for-children.php'); ?>
<?php require('_includes/sweeter-side.php'); ?>
</div>

<footer id="contact" class="cf">
	<div class="overlay" onClick="style.pointerEvents='none'"><!-- prevent wheel zoom over map --></div>
	<div id="map"></div>

	<div class="location">
		<p><span class="sm-gone"><i class="fa fa-map-marker"></i></span><a class="loc" tabIndex="-1" href="https://www.google.com/maps/place/39%C2%B038'02.1%22N+105%C2%B019'00.4%22W/@39.633908,-105.3173192,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d39.633907!4d-105.316772?hl=en-US" target="_blank">2962 Evergreen Parkway<span class="sm-gone">, </span><br class="lg-gone">Evergreen, CO 80439</a></p>
		<p><span class="sm-gone"><i class="fa fa-phone-square"></i></span><a class="loc" tabIndex="-1" href="tel:(303)%20736-8419">(303) 736-8419</a></p>
		<p></p>
	</div>


	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	 ?>	
	<div class="copyright cf">
		<p><?= ewd_copyright(2017); ?> Evergreen Brewery | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</div>
</footer>

<section id="h-space"></section>


<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="js/flexslider.js"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>