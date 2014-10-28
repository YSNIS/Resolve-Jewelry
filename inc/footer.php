			<div id="footer">

				<div id="social-icons">
					<a href="https://www.facebook.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/facebook.png" /></a>
					<a href="https://twitter.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/twitter.png" /></a>
					<a href="http://www.pinterest.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/pintrest.png" /></a>
					<a href="http://instagram.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/instagram2.png" /></a>
				</div>

				<div class="footer-info">
					<a href="<?php echo BASE_URL; ?>custom/"><p class="bot-border">Custom Work</p></a>
					<a href="<?php echo BASE_URL; ?>care/"><p class="bot-border">Jewelry Care</p></a>
					<a href="<?php echo BASE_URL; ?>exchanges/"><p class="bot-border">Exchanges</p></a>
					<a href="<?php echo BASE_URL; ?>shipments/"><p class="bot-border">Shipments</p></a>
					<a href="<?php echo BASE_URL; ?>thanks/"><p>Thank you</p></a>
				</div>

				<div id="copyright">
					<p>&copy;<?php echo date("Y"); ?> Resolve Jewelry</p>
				</div>

			</div>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/collections.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/item-images.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/collapse-nav.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
	<script src="<?php echo BASE_URL; ?>scripts/minicart.js"></script>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
	

	<!-- Slideshow for homepage -->
	<script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').slick({
            	slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: true,
            });

            $('.item-carousel').slick({
              slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
            });

            $('.carousel-images').slick({
             	slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
            });
        
	       $(window).bind('scroll', function() {
	       		var navHeight = $(window).height() - 0;
	       		// alert($(window).scrollTop());
	             if ($(window).scrollTop() > 270 && $("body").width() > 450) {
					 $('#Filters').addClass('fixed');
					 $('#Container').addClass('buffing');

	             }
	             else if ($(window).scrollTop() > 225 && $("body").width() < 450 && $("#navigation").is(":visible") === false){
	             	$('#Filters').addClass('fixed');
	             	$('#Container').addClass('buffing');
	             }
	             else if ($(window).scrollTop() > 444 && $("body").width() < 450 && $("#navigation").is(":visible") === true){
	             	$('#Filters').addClass('fixed');
	             	$('#Container').addClass('buffing');
	             }
	             else {
	                 $('#Filters').removeClass('fixed');
	                 $('#Container').removeClass('buffing');
	             }
	        })
	       $('.large-image').hide();
	    });
	</script>
	<div id="cart">
		
	</div>

	<script>
    	paypal.minicart.render();
	</script>
	<?php include (ROOT_PATH . "scripts/cart.php"); ?>	
    <!-- Filter for shop -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/shop-filter.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>scripts/buffer.js"></script>
    <!-- <script type="text/javascript" src="<?php //echo BASE_URL; ?>scripts/lightbox.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script> -->
    	<script>
    		// paypal.minicart.render();
    		// paypal.minicart.cart.on('add', function (idx, product, isExisting) {
    		// 	$.get( "/scripts/quants.php", { name: product.get("item_name") }, function(data) {
    		// 			if (isExisting) {
    		// 				product.set('quantity', data);
    		// 				updateCart()
    		// 				alert('Sorry, you can only have one of those.');
    		// 			}
    		// 	});
    		// });
    	// document.cookie="000";
    	</script>



	</body>

</html>	