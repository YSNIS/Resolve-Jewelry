<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	include (ROOT_PATH . "inc/products.php");
	$pageTitle = "Resolve Jewelry";
	$section = "shop";
	include (ROOT_PATH . "inc/header.php");
?>
		
<form class="controls" id="Filters">
  <!-- We can add an unlimited number of "filter groups" using the following format: -->
  
  <fieldset>
    <button class="filter reset active show-all" data-filter="">All</button>
    <button class="filter" data-filter=".necklace">Necklaces</button>
    <button class="filter" data-filter=".earring">Earrings</button>
    <button class="filter" data-filter=".braclet">Braclets</button>
    <button class="filter" data-filter=".body">Body</button>
    <button class="filter" data-filter=".ring">Rings</button>
  </fieldset>
  
  <fieldset>
    <button class="filter active show-all" data-filter="">All</button>
    <button class="filter" data-filter=".gold">Gold</button>
    <button class="filter" data-filter=".silver">Silver</button>
    <button class="filter" data-filter=".base-metal">Base Metal</button>
    <button class="filter" data-filter=".leather">Leather</button>
    <button class="filter" data-filter=".stone">Stone</button>
    <button class="filter" data-filter=".bead">Bead</button>
    <button class="filter" data-filter=".polymer-clay">Polymer Clay</button>
    
  </fieldset>
</form>

	<div id="Container" class="container">
			
		<?php
			echo get_products_for_filter_list();
		?>
	  
	  <div class="gap"></div>
	  <div class="gap"></div>
	  <div class="gap"></div>
	  <div class="gap"></div>
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