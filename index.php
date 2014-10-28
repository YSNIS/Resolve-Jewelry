

<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	$pageTitle = "Resolve Jewelry";
	$section = "home";
	$showCarousel = true;
	include (ROOT_PATH . "inc/header.php");
?>

	<!-- Image Carousel for Collection 1 -->
	<div class="carousel main">
		<div><img src="<?php echo BASE_URL; ?>images/carousel-1.jpg" alt="Resolve Jewelry Banner"></div>
		<div><img src="<?php echo BASE_URL; ?>images/carousel-2.jpg" alt="Resolve Jewelry Banner"></div>
		<div><img src="<?php echo BASE_URL; ?>images/carousel-3.jpg" alt="Resolve Jewelry Banner"></div>
		<div><img src="<?php echo BASE_URL; ?>images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>
		<div><img src="<?php echo BASE_URL; ?>images/carousel-5.jpg" alt="Resolve Jewelry Banner"></div>
	</div>


<?php include (ROOT_PATH . "inc/footer.php"); ?>


<!-- GOOGLE ANALYTICS -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55499911-1', 'auto');
  ga('send', 'pageview');

</script>


