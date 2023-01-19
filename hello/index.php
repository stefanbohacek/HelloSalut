<!doctype html>
<!--
<html itemscope itemtype="//schema.org/WebApplication" ng-app="myApp" >
-->
<html itemscope itemtype="//schema.org/WebPage" id="top">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Hello as a Service" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello, salut! Hello as a Service | by @stefanbohacek</title>
	<meta property="og:title" content="Hello, salut!" />
	<meta property="og:description" content="Hello as a Service" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://stefanbohacek.com/hellosalut/hello/" />
	<meta property="og:image" content="https://stefanbohacek.com/hellosalut/hello/images/helloworld-large.png" />	
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="stefanbohacek">
	<meta name="twitter:title" content="Hello, salut! | Hello as a Service">
	<meta name="twitter:description" content="Hello as a Service">
	<meta name="twitter:image:src" content="https://stefanbohacek.com/hellosalut/hello/images/helloworld-large.png">
	<meta name="twitter:domain" content="https://stefanbohacek.com/">
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="icons/favicon-144.png">
	<link rel="shortcut icon" href="icons/favicon.ico"/>
	<link rel="apple-touch-icon" href="icons/favicon-152.png">
	<link rel="apple-touch-icon-precomposed" href="icons/favicon-152.png">
	<link rel="icon" href="icons/favicon-32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="icons/favicon-64.png">	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="//feeds.feedburner.com/stefanbohacek" />
</head>
<body>
<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#top"><span class="fa fa-globe"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#supported-countries"><i class="fa fa-flag-o"></i> Supported countries</a></li>
				<li><a href="#examples"><i class="fa fa-eye"></i> Examples</a></li>
				<li><a href="#source-code"><i class="fa fa-github"></i> Source code</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><p class="navbar-text">by <a href="https://twitter.com/stefanbohacek">@stefanbohacek</a></p></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-square-o"></i> Share <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstefanbohacek.com%2Fhellosalut%2Fhello%2F" target="_blank"><i class="fa fa-facebook fa"></i> Facebook</a></li>
						<li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fstefanbohacek.com%2Fhellosalut%2Fhello%2F&text=Hello%2C%20salut!: http%3A%2F%2Fstefanbohacek.com%2Fhellosalut%2Fhello%2F&via=@stefanbohacek" target="_blank" title="Tweet"><i class="fa fa-twitter fa"></i>  Twitter</a></li>
						<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fstefanbohacek.com%2Fhellosalut%2Fhello%2F" target="_blank" title="Share on Google+"><i class="fa fa-google-plus fa"></i> Google+</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="jumbotron">
	<div class="container">
		<h1><span id="globe" class="fa fa-globe"></span> <span id="hello">Hello</span>, <span id="salut">salut</span>!</h1>
		<p>Hello as a Service</p>
	</div>
</div>
<div class="container">
	<div class="alert alert-info" role="alert">
		<strong>See also:</strong>
		<ul>
			<li>
				<a href="https://www.kaggle.com/stefanbohacek/hello-salut/home"><strong>Hello, salut! dataset</strong></a>
			</li>
			<li>
				<a href="https://botwiki.org/bot/hello-world/"><strong>Hello, world! bot</strong></a>
			</li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Hello as a service</h3>
	</div>
	<div class="panel-body">
	<p>Say hello to your visitors in their native language!</p>
	<ol>
	<li>Get your visitor's IP address and/or default language using your preferred methods</li>
	<li>Make a call to HelloSalut</li>
	<li>Say hello!</li>
	</ol>
	<p>You can also skip the first step and <a href="#automatic-mode" onclick="$(&quot;body,html&quot;).animate({scrollTop: $(&quot;#automatic-mode&quot;).offset().top-70}, 600); location.hash=&quot;automatic-mode&quot;; return false;">use the fully automatic mode</a>. Have a look at <a href="#examples" title="Links to sites using HelloSalut API. Send an email to stefan@stefanbohacek.com to be included." onclick="$(&quot;body,html&quot;).animate({scrollTop: $(&quot;#examples&quot;).offset().top-70}, 600); location.hash=&quot;examples&quot;; return false;">sites using HelloSalut</a>.</p>
    </div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">How to use</h3>
	</div>
	<div class="panel-body">
	<h4>Calling HelloSalut with your visitor's IP address and their default language setting</h4>
	<p>First you will need to find out your visitor's default language and his or her IP address (for fallback). Example functions:
	<ul>
		<li>
			<a href="http://admincmd.blogspot.com/2007/08/php-get-client-ip-address.html">getting user's IP address</a>
		</li>
		<li>
			<a href="http://www.dyeager.org/blog/2008/10/getting-browser-default-language-php.html">retrieving user's default language</a>
		</li>
	</ul>
	You are free to use your own methods.</p>
	<p>Once we have user's language and IP address we'll call <i><abbr title="HTTPS version is also available">http</abbr>://stefanbohacek.com/hellosalut/?lang=LANGUAGECODE&ip=IPADDRESS</i> and HelloSalut will return the country code (or language code) and the translation for the word "Hello".</p>
	<p>Some examples:</p>
	<ul>
		<li><a href="https://hellosalut.stefanbohacek.dev/?lang=ja" title="Using language code">https://hellosalut.stefanbohacek.dev/?lang=ja</a></li>
		<li><a href="https://hellosalut.stefanbohacek.dev/?ip=89.120.120.120" title="Using an IP address">https://hellosalut.stefanbohacek.dev/?ip=89.120.120.120</a></li>
		<li><a href="https://hellosalut.stefanbohacek.dev/?cc=nl" title="It is also possible to use a country code">https://hellosalut.stefanbohacek.dev/?cc=nl</a></li>
	</ul>
	<p>If you have a <strong>Mashape</strong> or <strong>GitHub</strong> account, you can try the API on <a href="https://www.mashape.com/stefanbohacek/hellosalut#!documentation">mashape.com</a></p>
	<p><span id="mashape-button" data-api="hellosalut" data-name="stefanbohacek" data-icon="1"></span><script src="https://www.mashape.com/embed/button.js"></script></p>
	<p><strong>Note:</strong> The language setting has a higher priority than IP. You can choose to either only supply the IP address or only the language (not recommended right now due to limited amount of supported languages, see below for full list). If the language or IP can not be matched, default value of "Hello" will be returned.</p>
	<pre id="results">
	</pre>
	Now we can say hello!
	<pre id="sayhello">
	</pre>
	<h4 id="automatic-mode">Automatic mode</h4>
	<p>You can make a call to <i><abbr title="HTTPS version is also available">http</abbr>://stefanbohacek.com/hellosalut/?mode=auto</i> to have HelloSalut determine the correct language automatically. The functions currently in  use are the same as example functions above.</p>
	</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" id="supported-countries">Beta</h3>
	</div>
	<div class="panel-body">
	<p>
	The service is <strong>currently in beta</strong> while I'm adding more countries and languages. This is a list of countries that are currently supported based on IP address:
	</p>
	<p class="well"><i>
	Afghanistan, Albania, American Samoa, Andorra, Angola, Anguilla, Antarctica, Antigua and Barbuda, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados, Belarus, Belgium, Benin, Bermuda, Bolivia, Bosnia and Herzegovina, Brazil, British Indian Ocean Territory, Brunei Darussalam, Bulgaria, Burkina Faso, Burma (Myanmar), Burundi, Cambodia, Canada, Chile, China, Colombia, Croatia, Cyprus, Czech Republic, Denmark, Egypt, Estonia, Europe, Finland, France, French Guiana, French Polynesia, French Southern Territories, Georgia, Germany, Greece, Guyana, Hong Kong, Hungary, Iceland, India, Indonesia, Ireland, Israel, Italy, Jamaica, Japan, Kazakhstan, Kenya, Korea (North), Korea (South), Laos, Latvia, Lithuania, Luxembourg, Macedonia, Malaysia, Malta, Mexico, Mongolia, Nepal, Netherlands, Netherlands Antilles, New Zealand, Niger, Norway, Oman, Pakistan, Peru, Philippines, Poland, Portugal, Puerto Rico, Republic of Serbia, Romania, Russia, Saudi Arabia 	, Serbia and Montenegro, Singapore, Slovak Republic, Slovenia, South Africa, Spain, Sweden, Switzerland, Taiwan, Thailand, Turkey, Ukraine, United Arab Emirates, United Kingdom, United States, Uruguay, Venezuela, Vietnam, Virgin Islands (British) and Virgin Islands (U.S.)
	</i></p>
	<p>Supported browser languages:</p>
	<p class="well"><i>
	ar, az, be, bg, bn, bs, cs, da, de, dz, el, en, en-gb, en-us, es, et, fa, fi, fil, fr, he, hi, hr, hu, hy, id, is, it, ja, ka, kk, km, ko, lb, lo, lt, lv, mk, mn, ms, my, ne, no, pl, pt, ro, ru, sk, sl, sq, sr, sv, sw, th, tk, uk, vi, zh
	</i></p>
	<p>
	If you come across any issues, notice any mistakes in translations or would like me to add a particular country or language sooner, please let me know at <a href="mailto:stefan@stefanbohacek.com" title="Email me">stefan@stefanbohacek.com</a> or <a href="https://twitter.com/stefanbohacek" title="My Twitter">@stefanbohacek</a> Also feel free to contact me if you would like your site to be listed below.
	</p>
    </div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" id="examples">Sites using HelloSalut</h3>
	</div>
	<div class="panel-body">
	<ul>
		<!-- <li><a href="https://stefanbohacek.com">stefanbohacek.com: my personal website</a> (in the contact form)</li> -->
		<li><a href="https://stefanbohacek.com/project/hellosalut-api/">Hello world!</a> (a HelloSalut demo page)</a>
		<!-- <li><a href="http://koenklaren.nl/">koenklaren.nl: personal website of Koen Klaren</a></li> -->
	</ul>

    </div>
	</div>	
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" id="source-code">Open source</h3>
	</div>
	<div class="panel-body">
	<p>The database (which is a modified version of the database from <a href="http://www.ip2nation.com/" target="_blank">ip2nation.com</a>) and the PHP code that handles it are <a href="https://github.com/stefanbohacek/HelloSalut" target="_blank" title="github.com/stefanbohacek/HelloSalut">available on Github</a>.</p>
    </div>
	</div>	

	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Notes</h3>
	</div>
	<div class="panel-body">
	<ul>
	<li>HTTPS version is also supported</li>
	</ul>

    </div>
	</div>		
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/scripts.min.js"></script>
<?php
echo '<script>function showResults(response){console.log(response);	responseArray = [];	for (data in response){responseArray.push("	" + data  + ":"   + response[data] );}responseString = "{<br />" + responseArray.join(",<br />") + "<br />}";$("#results").html(responseString);$("#sayhello").html(response.hello+"!");}$.ajax({type: "GET", url: "//stefanbohacek.com/hellosalut/index.php?mode=auto", data: {"mode":"auto"}, success: function(response) {showResults(response)}});</script>';
?>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
	<script>window.angular || document.write('<script src="js/angular.min.js"><\/script>');</script>
<script src="js/controllers.js"></script>
-->
<script type="text/javascript">var sc_project=6294985,sc_invisible=1,sc_security="d5eddb86",scJsHost=(("https:"==document.location.protocol)?"https://secure.":"http://www.");document.write("<sc"+"ript defer type='text/javascript' src='"+scJsHost+"statcounter.com/counter/counter.js'></"+"script>");</script><noscript><div class="statcounter"><a title="free hit counter" href="http://statcounter.com/free-hit-counter/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/6294985/0/d5eddb86/1/" alt="free hit counter"></a></div></noscript>
<!-- Thanks for checking out the source code :) Feel free to say hi:  stefan@stefanbohacek.com -->
</body>
</html>