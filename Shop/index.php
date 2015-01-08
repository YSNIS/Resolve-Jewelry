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
    <button class="sort" data-sort="data-value:asc">Sort</button>
    <button class="filter reset active show-all" data-filter="">All</button>
    <button class="filter" data-filter=".necklace">Necklaces</button>
    <button class="filter" data-filter=".earring">Earrings</button>
    <button class="filter" data-filter=".braclet">Bracelets</button>
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