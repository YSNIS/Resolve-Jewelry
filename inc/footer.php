			<div id="footer">

				<div id="social-icons">
					<a href="https://www.facebook.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/facebook.png" /></a>
					<a href="https://twitter.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/twitter.png" /></a>
					<a href="http://www.pinterest.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/pintrest.png" /></a>
					<a href="http://instagram.com/resolvejewelry" target="_blank"><img src="<?php echo BASE_URL; ?>images/icons/instagram2.png" /></a>
				</div>

				<div class="footer-info">
					<a href="<?php echo BASE_URL; ?>stockists/"><p class="bot-border">Stockists</p></a>
					<a href="<?php echo BASE_URL; ?>care/"><p class="bot-border">Jewelry Care</p></a>
					<a href="<?php echo BASE_URL; ?>exchanges/"><p class="bot-border">Exchanges</p></a>
					<a href="<?php echo BASE_URL; ?>shipments/"><p class="bot-border">Shipments</p></a>
					<a href="<?php echo BASE_URL; ?>thanks/"><p>Thank you</p></a>
				</div>

				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:400px;}
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="//resolvejewelry.us9.list-manage.com/subscribe/post?u=368b1120ddf659ebd6ef871ff&amp;id=181e3d5749" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
					<input style="text-align:center" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address for promos and coupons" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_368b1120ddf659ebd6ef871ff_181e3d5749" tabindex="-1" value=""></div>
				    <div class="clear"><input style="font-size:10px" type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>

				<!--End mc_embed_signup-->

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


    	<!-- Start of StatCounter Code for Default Guide -->
    	<script type="text/javascript">
    	var sc_project=10185660; 
    	var sc_invisible=1; 
    	var sc_security="3fdfe35f"; 
    	var scJsHost = (("https:" == document.location.protocol) ?
    	"https://secure." : "http://www.");
    	document.write("<sc"+"ript type='text/javascript' src='" +
    	scJsHost+
    	"statcounter.com/counter/counter.js'></"+"script>");
    	</script>
    	<noscript><div class="statcounter"><a title="web stats"
    	href="http://statcounter.com/" target="_blank"><img
    	class="statcounter"
    	src="http://c.statcounter.com/10185660/0/3fdfe35f/1/"
    	alt="web stats"></a></div></noscript>
    	<!-- End of StatCounter Code for Default Guide -->
	</body>

</html>	