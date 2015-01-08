<?php

function get_product_names()
{
    require(ROOT_PATH . "inc/database.php");
    try {
        $results = $db->query("
                SELECT name FROM products 
                ORDER BY name asc;");
    } 

    catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $names = $results->fetchAll(PDO::FETCH_ASSOC);

    return $names;
}

function get_products_for_filter_list()
{
	require(ROOT_PATH . "inc/database.php");
	try {
		$results = $db->query("
	            SELECT name, price, sku, img, quantity, form, gold, silver, `base metal`, leather, stone, bead, `polymer clay` FROM products 
				JOIN forms ON form_id = id 
				ORDER BY name asc;");
	} 
	catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $products = $results->fetchAll(PDO::FETCH_ASSOC);

    foreach($products as $product) {
    	
    	if ($product[gold] == "1")
    	{
    		$gold = " gold ";
    	} else {
    		$gold = " ";
    	}
    	if ($product[silver] == "1")
    	{
    		$silver = " silver ";
    	} else {
    		$silver = " ";
    	}
    	if ($product['base metal'] == "1")
    	{
    		$baseMetal = " base-metal ";
    	} else {
    		$baseMetal = " ";
    	}
    	if ($product[leather] == "1")
    	{
    		$leather = " leather ";
    	} else {
    		$leather = " ";
    	}
    	if ($product[stone] == "1")
    	{
    		$stone = " stone ";
    	} else {
    		$stone = " ";
    	}
    	if ($product[bead] == "1")
    	{
    		$bead = " bead ";
    	} else {
    		$bead = " ";
    	}
    	if ($product['polymer clay'] == "1")
    	{
    		$polymerClay = " polymer-clay ";
    	} else {
    		$polymerClay = " ";
    	}
        $cost = " " . $product[price] . " ";
        $price = "<p><span class='dollar'>$</span>" . $product[price];
        if ($product[quantity] == 0) {
            $price = "<p>Sold Out";
        }

        

    	$string = $string . 
    	'<div class="mix all ' .  
    	$product[form] .
    	$gold .
    	$silver .
    	$baseMetal .
    	$leather .
    	$stone .
    	$bead .
    	$polymerClay .
    	$product[name] .
    	'" data-value="' . $product[price] . '"><a href="'. BASE_URL .'shop/' . $product[name] .'/"><figure class="effect-zoe"><img src="' . BASE_URL . $product[img] . '/1.jpg" alt="Jewelry">
        <figcaption><h2>' . $product[name] . '</h2>' . $price . '</p></figcaption></figure></a></div>';
    }
    
    return $string;
    

}

function get_item_named($name)
{
    require(ROOT_PATH . "inc/database.php");
    try {
        $results = $db->query('
                SELECT name, price, sku, img, paypal, description, quantity
                FROM products
                WHERE name = "' . $name .'"
                ;');
    } 
    catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }
    $product = $results->fetch(PDO::FETCH_ASSOC);

    if ($product ===false) return $product;

    $product["length"] = array();
    $product["style"] = array();

    // Get Lengths
    try 
    {
        $lengths = $db->query('
                SELECT length from product_lengths
                INNER JOIN lengths ON lengths.id = product_lengths.length_id
                where sku = ' . $product["sku"] . '');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["length"] = $lengths->fetchAll(PDO::FETCH_ASSOC);

    // Get styles
    try 
    {
        $styles = $db->query('
                SELECT style from product_styles
                INNER JOIN styles ON styles.id = product_styles.style_id
                where sku = ' . $product["sku"] . ';');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["style"] = $styles->fetchAll(PDO::FETCH_ASSOC);

    // Get color
    try 
    {
        $colors = $db->query('
                SELECT color from product_colors
                INNER JOIN colors ON colors.id = product_colors.color_id
                where sku = ' . $product["sku"] . ';');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["color"] = $colors->fetchAll(PDO::FETCH_ASSOC);
    
    // Get size
    try 
    {
        $colors = $db->query('
                SELECT size from product_sizes
                INNER JOIN sizes ON sizes.id = product_sizes.size_id
                where sku = ' . $product["sku"] . ';');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["size"] = $colors->fetchAll(PDO::FETCH_ASSOC);

    // Get set
    try 
    {
        $sets = $db->query('
                SELECT setname, price from product_sets
                INNER JOIN sets ON sets.id = product_sets.set_id
                where sku = ' . $product["sku"] . ';');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["sets"] = $sets->fetchAll(PDO::FETCH_ASSOC);

    // Get materials
    try 
    {
        $materials = $db->query('
               SELECT materials, cost from product_materials 
               INNER JOIN materials ON materials.id = product_materials.materials_id 
               WHERE sku = ' . $product["sku"] . ';');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["materials"] = $materials->fetchAll(PDO::FETCH_ASSOC);

    

    // Get extras
    try 
    {
        $extras = $db->query('
                SELECT name, price from product_extras
                INNER JOIN extras ON extras.id = product_extras.extras_id
                where sku = ' . $product["sku"] . ';');
    }
    catch (Exception $e) 
    {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product["extras"] = $extras->fetchAll(PDO::FETCH_ASSOC);

    return $product;
}

?>