<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>
<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php require('_includes/navigation.php'); ?>



<section id="intro">
	<span onclick="openNav()"><img id="intro-nav-toggle" class="nav-toggle" src="_images/menu-nav-toggle.png" /></span>
	<img id="logo" class="logo" src="_images/evergreen-brewery-logo.png" />
</section>

<?php require('_includes/taphunter.php'); ?>


<div id="food" >
<?php require('_includes/starters.php'); ?>
<?php require('_includes/soups-salads.php'); ?>
<?php require('_includes/sandwiches.php'); ?>
<?php require('_includes/for-children.php'); ?>
<?php require('_includes/sweeter-side.php'); ?>
</div>

<div id="contact" class="cf">
	<div class="overlay" onClick="style.pointerEvents='none'"><!-- prevent wheel zoom over map --></div>
	<div id="map"></div>
	<div class="location">
		<p><span class="sm-gone"><i class="fa fa-map-marker"></i></span><a class="loc" tabIndex="-1" href="https://www.google.com/maps/place/39%C2%B038'02.1%22N+105%C2%B019'00.4%22W/@39.633908,-105.3173192,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d39.633907!4d-105.316772?hl=en-US" target="_blank">2962 Evergreen Parkway<span class="sm-gone">, </span><br class="lg-gone">Evergreen, CO 80439</a></p>
		<p><span class="sm-gone"><i class="fa fa-phone-square"></i></span><a class="loc" tabIndex="-1" href="tel:(303)%20736-8419">(303) 736-8419</a></p>
		<p></p>
	</div>
</div><!-- #map-container -->


<?php require('_includes/footer.php'); ?>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>