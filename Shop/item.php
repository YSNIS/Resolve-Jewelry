<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	include (ROOT_PATH . "inc/products.php");
	$item = get_item_named($_GET["name"]);
	// if ($item == false)
	// {
	// 	header('Location: ' . BASE_URL . 'shop/');
	// 	exit();
	// }
	$pageTitle = "Resolve Jewelry";
	$section = "shop";
	
	include (ROOT_PATH . "inc/header.php");

		// echo var_dump($item);


?>
	<div class="item-wrapper">
	<div class="item-images">
		
		<div class="item-large">
			<?php echo '<img src="' . BASE_URL . 'images/' . $_GET["name"] .'/1.jpg"/>'; ?>
		</div>

		<div class="item-small">
			<?php
				$dir = ROOT_PATH . 'images/' . $_GET["name"] .'/';
				$count = glob($dir . "*.jpg");
				for($i = 1; $i <= count($count); $i++)
				{
					echo '<img class="small-image" src="' . BASE_URL . 'images/' . $_GET["name"] .'/' . $i . '.jpg"/>';
				}
			?>
		</div>	

	</div>
	
	<div class="item-information">
		<!-- name -->
		<?php
			echo '<div class="item-name">' . $item["name"] . '</div>';
		?>
		<!-- Description -->
		<p class="item-description">
			<?php
				echo $item["description"];
			?>
		</p>
		<!-- price -->
		<?php
			echo '<div class="item-price" original="' . $item["price"] .'">$' . $item["price"] . '</div>';
		?>
		<!-- paypal checkout button (DONT FORGET TO UNCOLLAPSE-->
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="business" value="A8T4KR4TP5EUS">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="item_name" value="<?php echo $item["name"]; ?>">
		<!-- <input type="hidden" name="item_number" value="Sku: <?php echo $item["sku"]; ?>"> -->
		<input id="priceofitem" type="hidden" name="amount" value="<?php echo $item["price"]; ?>">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="button_subtype" value="products">
		<input class="quantity_input" type="hidden" name="quantity" value="1" />
		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="cn" value="Add special instructions to the seller:">
		<input type="hidden" name="no_shipping" value="2">
		<input type="hidden" name="handling_cart" value="5.00">
		<input type="hidden" name="shipping" value="1.00">
		<input type="hidden" name="shipping2" value="1.00">
		<input type="hidden" name="add" value="1">
		<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
		<!-- <table> -->
		<?php 
			$num = 0;
			if($item["style"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Style"><h3 class="input_name">Style</h3><div class="dropdown dropdown_style"><div class="style_select"></div><select class="item_style" name="os<?php echo $num; ?>">
					<?php
						for ($i = 0; $i < count($item["style"]); $i++)
						{
							echo '<option value="' . $item["style"][$i]["style"] . '">' . $item["style"][$i]["style"] . '</option>';
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php
				$num++; 
			}
		?>
		<?php 
			if($item["length"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Length"><h3 class="input_name">Length</h3><div class="dropdown dropdown_style"><div class="length_select"></div><select class="item_length" name="os<?php echo $num; ?>">
					<?php
						for ($i = 0; $i < count($item["length"]); $i++)
						{
							echo '<option value="' . $item["length"][$i]["length"] . '">' . $item["length"][$i]["length"] . '</option>';
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php 
				$num++; 
			}
		?>
		<?php 
			if($item["color"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Color"><h3 class="input_name">Color</h3><div class="dropdown dropdown_style"><div class="color_select"></div><select class="item_color" name="os<?php echo $num; ?>">
					<?php
						for ($i = 0; $i < count($item["color"]); $i++)
						{
							echo '<option value="' . $item["color"][$i]["color"] . '">' . $item["color"][$i]["color"] . '</option>';
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php 
				$num++; 
			}
		?>
		<?php 
			if($item["size"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Size"><h3 class="input_name">Size</h3><div class="dropdown dropdown_style"><div class="size_select"></div><select class="item_size" name="os<?php echo $num; ?>">
					<?php
						for ($i = 0; $i < count($item["size"]); $i++)
						{
							echo '<option value="' . $item["size"][$i]["size"] . '">' . $item["size"][$i]["size"] . '</option>';
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php 
				$num++; 
			}
		?>
		<?php 
			if($item["materials"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Material"><h3 class="input_name">Material</h3><div class="dropdown dropdown_material"><div class="material_select"></div><select class="item_material" name="os<?php echo $num; ?>">
					<?php
						echo '<option value="base" material_price="0">Base</option>';
						for ($i = 0; $i < count($item["materials"]); $i++)
						{
							echo '<option value="' . $item["materials"][$i]["materials"] . '" material_price="' .  $item["materials"][$i]["cost"]  . '">' .  $item["materials"][$i]["materials"] ." ($" . $item["materials"][$i]["cost"] . ')</option>';
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php 
				$num++; 
			}
		?>
		<?php 
			
			if($item["sets"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Set"><h3 class="input_name">Set</h3><div class="dropdown dropdown_sets"><div class="sets_select"></div><select class="item_sets" name="os<?php echo $num; ?>">
					<?php
						for ($i = 0; $i < count($item["sets"]); $i++)
						{
							echo '<option value="' . $item["sets"][$i]["setname"] . '" price="' .  $item["sets"][$i]["price"] . '">' . $item["sets"][$i]["setname"] . '</option>';
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php 
				$num++; 
			}
		?>
		<?php 
			if($item["quantity"] != null)
			{
		?>
				<h3 class="input_name">Quantity</h3><div class="dropdown dropdown_quantity"><div class="quantity_select"></div><select class="quantity">
					<?php
						for ($i = 1; $i < $item["quantity"]+1; $i++)
						{
							echo '<option>'.$i.'</option>';	
						}
					?>
				</select>
				<span class="sexydrop"></span>
				</div>
		<?php 
			}
		?>
		<?php 
			if($item["extras"] != null)
			{
		?>
				<input type="hidden" name="on<?php echo $num; ?>" value="Extras">
				<h3 class="input_name">Recommended Layers</h3>
				<?php
					for ($i = 0; $i < count($item["extras"]); $i++)
					{
						echo '<div class="extras"><input class="extra" type="checkbox" name="' . $item["extras"][$i]["name"] . '"  price="' . $item["extras"][$i]["price"] . '">' . $item["extras"][$i]["name"] . ' $' . $item["extras"][$i]["price"] . '</div>'; 
					}
				?>
				<input type="hidden" id="extravalue" name="os<?php echo $num; ?>" value="">
		<?php  
			$num++;
			}
		?>
		
		<input class="addtocart" value="Add to Cart" type="submit"  name="submit" alt="PayPal - The safer, easier way to pay online!">
		<h2 class="soldout">Sold Out</h2>
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		

	</div>
	</div>


	<?php
	if ($item["quantity"] == 0)	{
	?>	
		<script type="text/javascript">
		  $('.addtocart').hide();
		  $('.soldout').show();
		</script>
	<?php } ?>
	<span class='st_fblike_large' displayText='Facebook Like'></span>
	<span class='st_facebook_large' displayText='Facebook'></span>
	<span class='st_twitter_large' displayText='Tweet'></span>
	<span class='st_pinterest_large' displayText='Pinterest'></span>
	<span class='st_email_large' displayText='Email'></span>

<?php include (ROOT_PATH . "inc/footer.php"); ?>