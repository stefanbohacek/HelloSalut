<!DOCTYPE html>
<html itemscope itemtype="//schema.org/WebApplication" ng-app="app" ng-controller="HelloListCtrl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="A HelloSalut + Google Maps mashup" />
	<meta name="viewport" content="initial-scale=1">
	<title>Hello world!</title>
	<meta property="og:title" content="Hello world!" />
	<meta property="og:description" content="A HelloSalut + Google Maps mashup" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://stefanbohacek.com/hellosalut/helloworld/" />
	<meta property="og:image" content="//stefanbohacek.com/hellosalut/helloworld/images/helloworld.png" />	
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@stefanbohacek">
	<meta name="twitter:title" content="Hello world!">
	<meta name="twitter:description" content="A HelloSalut + Google Maps mashup">
	<meta name="twitter:image:src" content="//stefanbohacek.com/hellosalut/helloworld/images/helloworld.png">
	<meta name="twitter:domain" content="https://stefanbohacek.com/">
	<link type="text/plain" rel="author" href="humans.txt" />
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
		<script>window.angular || document.write('<script src="js/angular.min.js"><\/script>');</script>
	<script src="js/controllers.js"></script>
	<script src="js/scripts.min.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.min.css">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="/images/favicon-144.png">	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link rel="apple-touch-icon-precomposed" href="images/favicon-152.png">
	<link rel="icon" href="images/favicon-32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon-64.png">	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="//feeds.feedburner.com/stefanbohacek" />
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo getenv('GOOGLE_MAPS_API_KEY'); ?>&amp;sensor=false">
	</script>
	<script type="text/javascript">
		function initialize() {
			var mapOptions = {
				center: new google.maps.LatLng(0, 0),
				zoom: 2,
				zoomControl: false,
				minZoom: 1,
				maxZoom: 4,
				streetViewControl: false
			};
			map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
			document.getElementById('hello-title').click();

		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  <div class="container">
    <p id="hello-title" addcity><a href="https://github.com/stefanbohacek/HelloSalut" title="Hello as a Service: open-sourced on GitHub">HelloSalut</a> + <a href="https://developers.google.com/maps/" title="Google Maps API">Google Maps</a> by <a href="https://stefanbohacek.online/@stefan">Stefan Bohacek</a></p>
  </div>
<div id="map-canvas"/></div>
<?php
	include 'html/tracking.html';
?>
<!-- Thanks for checking out my source code :) Feel free to say hi:  stefan@stefanbohacek.com -->
</body>
</html>