<!DOCTYPE html>
<?php
    $user_is_first_timer = !isset( $_COOKIE["evergreen-brewery-first-visit"] );
    setcookie( "evergreen-brewery-first-visit", 1, strtotime( '+30 days' ) );
?>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design

  Contact:      robert@evergreenwebdesign.com
                (303) WEBSITE
                that's (303) 932.7483

  Comments:     You look very nice today! :)
-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Evergreen Brewery, Evergreen, Colorado Brewery &amp; Taphouse</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="Evergreen Brewery in Evergreen, Colorado - Local hand crafted beer & artisan cuisine.">
	<meta name="format-detection" content="telephone=no">

	<meta property="og:url" content="https://www.evergreenbrewery.com" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Evergreen Brewery, Evergreen, Colorado Brewery &amp; Taphouse" />
	<meta property="og:image" content="https://www.evergreenbrewery.com/_images/thumbnails/Evergreen-Brewery-badge.png" />
	<meta property="og:image:alt" content="Evergreen Brewery logo" />
	<meta property="og:description" content="Evergreen Brewery in Evergreen, Colorado - Local hand crafted beer & artisan cuisine." />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,400i|Lora:400,400i' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcS8gagJkuoY6gB3utE1iyZnWk4JG5Suw&callback=initMap"></script>
	<script src="js/google-map.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107373941-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107373941-1');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '2004487709846668'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1" 
	src="https://www.facebook.com/tr?id=2004487709846668&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

</head>
