<script type="text/javascript">

paypal.minicart.cart.on("add", function(){
	updateCart();
	if ($('#PPMiniCart input').hasClass("coupon"))
	{

	}	else {
		$('#PPMiniCart form').append("<input class='coupon' placeholder='Enter Coupon Code'></input>");
	}
});

paypal.minicart.cart.on("change", function(){
	updateCart();
	if ($('#PPMiniCart input').hasClass("coupon"))
	{

	}	else {
		$('#PPMiniCart form').append("<input class='coupon' placeholder='Enter Coupon Code'></input>");
	}
	var stuff = paypal.minicart.cart.items();
	var thing;
	var len = stuff.length;
	var i = 0;

	for (thing in stuff)
	{
		stuff[thing].on('change', function() {
			checkQuants(stuff[thing]);
		});
	}
});

paypal.minicart.cart.on("remove", function(){
	updateCart();
});

paypal.minicart.cart.on("destroy", function(){
	updateCart();
});
paypal.minicart.cart.on("checkout", function(){
	if ($('.coupon').val() == "INSPIRE" || $('.coupon').val() == "inspire") {
		$('#PPMiniCart form').append('<input class="cart-discount" type="hidden" name="discount_rate_cart" value="20">');
	}
	if ($('.coupon').val() == "PLACEHOLDER" || $('.coupon').val() == "placeholder") {
			$('#PPMiniCart form').append('<input class="cart-discount" type="hidden" name="discount_rate_cart" value="50">');
	}
});

var updateCart = function() {
	if (paypal.minicart.cart.total() != 0 )
	{
		$("#cart").show();
		$("#cart .cart-items").remove();
		var numOfItems = 0;
		var hihi = "";
		var items = paypal.minicart.cart.items(),
				len = items.length,
				total = 0,
				i;
		
		for (i = 0; i < len; i++) {
			numOfItems += items[i].get('quantity');

		}

		if (numOfItems == 1)
		{
			var string = "<div class='cart-items'><div class='num-in-cart'>" + numOfItems + "</div><div class='cart-item-word'><p>item</p></div><div class='cart-amount'>$" + paypal.minicart.cart.total() + ".00</></div></div>";	
		}
		else
		{
			var string = "<div class='cart-items'><div class='num-in-cart'>" + numOfItems + "</div><div class='cart-item-word'><p>items</p></div><div class='cart-amount'>$" + paypal.minicart.cart.total() + ".00</></div></div>";	
		}
		
		$("#cart").append(string);
	}
	else
	{
		$("#cart").hide();
	}
	// $('.minicart-name').append('<div class="mini-cart-quantity">Quantity: ' + $('.quantity_input').val() + '</div>');
}

updateCart();
$("#cart").toggle(function(){
	paypal.minicart.view.show();
	if ($('#PPMiniCart input').hasClass("coupon"))
	{

	}	else {
		$('#PPMiniCart form').append("<input class='coupon' placeholder='Enter Coupon Code'></input>");
	}
}, function () {
	paypal.minicart.view.show();
});

// paypal.minicart.render();
paypal.minicart.cart.on('add', function (idx, product, isExisting) {
	$.get("/scripts/quants.php", { name: product.get("item_name") }, function(data) {
			if (product.get('quantity') > data) {
				product.set('quantity', data);
				// updateCart()
				alert('Sorry, you can only have ' + data + 'of this item.');
			}
	});
});



var checkQuants = function (product) {

	// var items = paypal.minicart.cart.items();
	// var len = items.length;
	// var i = 0;
	
	// for (i = 0; i < len; i++) {
		$.get("/scripts/quants.php", { name: product.get("item_name") }, function(data) {
				if (data != 0) {
					if (product.get('quantity') > data) {
						product.set('quantity', data);
						// updateCart()
						alert('Sorry you can only have ' + data + 'of this item.');
					}	
				}
				else {
					// alert("hi");
					product.destroy();
				}

		});
	// }	
}

var stuff = paypal.minicart.cart.items();
var thing;
var len = stuff.length;
var i = 0;

for (thing in stuff)
{
	stuff[thing].on('change', function() {
		checkQuants(stuff[thing]);
	});
	$.get( "/scripts/quants.php", { name: stuff[thing].get("item_name") }, function(data) {
			if (data != 0 )
			{
				if (stuff[thing].get('quantity') > data) {
					stuff[thing].set('quantity', data);
		// 			// updateCart()
				}
			}
			else {
				// alert(stuff[thing].get('item_name'));
				DestroyItem(stuff[thing]);
			}
	});
}

var DestroyItem = function (item) {
	var stuff = paypal.minicart.cart.items();
	var thing;
	var len = stuff.length;
	var i = 0;

	for (i = 0; i < len; i++) {
		if (item.get("item_name") == paypal.minicart.cart.items(i).get("item_name")) {
			paypal.minicart.cart.remove(i);
			alert("The item: " + item.get("item_name") + " is no longer available.  Your cart has been updated.")
		}
		
	}


}

// $.each(stuff, function(){	
	// alert(hi);
	// alert(index);
	// alert(value);
	// $.get( "/scripts/quants.php", { name: stuff[i].get("item_name") }, function(data) {
			// if (stuff[i].get('quantity') > data) {
				// stuff[i].set('quantity', data);
	// 			// updateCart()
				
	// }
	// });
// }

</script>

