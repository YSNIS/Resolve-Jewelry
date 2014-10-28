<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/fonts.css" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>slick/slick.css"/>
		<!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/demo.css" type="text/css"> -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/component.css" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


		
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="banner">
					<a href="<?php echo BASE_URL; ?>collections/"><img src="<?php echo BASE_URL; ?>images/banner10.png" alt="Resolve Jewelry Banner"></a>
				</div>
				<button class="mobile-nav">
				</button>
				<div id="navigation">
					<ul>
						<li class="<?php if ($section == "collections") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>collections/">Collections</a></li>
						<li class="<?php if ($section == "shop") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>shop/">Shop</a></li>
						<li class="<?php if ($section == "story") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>story/">Story</a></li>
						<li class="<?php if ($section == "stockists") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>stockists/">Stockists</a></li>
						<li class="<?php if ($section == "contact") {echo "on";} ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
					</ul>
				</div>
			</div>