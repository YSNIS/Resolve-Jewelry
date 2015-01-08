<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/fonts.css" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>slick/slick.css"/>
		<!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/demo.css" type="text/css"> -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/component.css" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
		
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- GOOGLE ANALYTICS -->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-55499911-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "da14cf65-d02c-422a-a3ba-6b1ce9c9a203", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
		
	</head>
	<body>

		<div id="wrapper">
			<a href="<?php echo BASE_URL; ?>holiday/">
			<div id="holiday-banner">
				<h1>Resolve is out of town! Shipping will resume on January 8th.</h1>
			</div>
			</a>
			<div id="header">
				<div id="banner">
					<a href="<?php echo BASE_URL; ?>shop/"><img src="<?php echo BASE_URL; ?>images/banner10.png" alt="Resolve Jewelry Banner"></a>
				</div>
				<!-- HOLIDAY BANNER -->
				
				
				<button class="mobile-nav">
				</button>
				<div id="navigation">
					<ul>
						<li class="<?php if ($section == "collections") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>portfolio/">Portfolio</a></li>
						<li class="<?php if ($section == "shop") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>shop/">Shop</a></li>
						<!-- <li class="<?php if ($section == "holiday") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>holiday/">Holiday Shows</a></li> -->
						<li class="<?php if ($section == "story") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>hello/">Hello</a></li>
						<li class="<?php if ($section == "customize") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>custom/">Customize</a></li>
						<li class="<?php if ($section == "contact") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
					</ul>
				</div>
			</div>