<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	include (ROOT_PATH . "inc/products.php");
	$item = get_item_named($_GET["name"]);

	$quantity = $item['quantity'];
	echo $quantity;
?>

