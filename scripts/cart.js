
paypal.minicart.cart.on("add", function(){
	updateCart();
});

paypal.minicart.cart.on("change", function(){
	updateCart();
});

paypal.minicart.cart.on("remove", function(){
	updateCart();
});

paypal.minicart.cart.on("destroy", function(){
	updateCart();
});

var updateCart = function() {
	if (paypal.minicart.cart.total() != 0 )
	{
		$("#cart").show();
		$("#cart .cart-items").remove();
		var numOfItems = 0;
		
		var items = paypal.minicart.cart.items(),
				len = items.length,
				total = 0,
				i;

		for (i = 0; i < len; i++) {
			numOfItems += items[i].get('quantity');
			// alert(numOfItems);
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
	$('.minicart-name').append('<div class="mini-cart-quantity">Quantity: ' + $('.quantity_input').val() + '</div>');

}

updateCart();
$("#cart").toggle(function(){
	paypal.minicart.view.show();
}, function () {
	paypal.minicart.view.show();
});

// $("#PPMiniCart").click(function(){
// 	$(".minicart-remove").text("remove");
// 	alert($(".minicart-remove").text());
// })
