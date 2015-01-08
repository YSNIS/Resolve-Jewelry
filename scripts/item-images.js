$('.small-image').bind('click', function(event) {
	// alert($(".item-large img").prop("src"));
	$(".item-large img").attr("src", $(this).attr("src"));
});

$('.dropdown_style').change(function(){
	$('.style_select').text($(".item_style option:selected").text());
	// alert();
});

$('.dropdown_style').change(function(){
	$('.length_select').text($(".item_length option:selected").text());
	// alert();
});

$('.dropdown_style').change(function(){
	$('.color_select').text($(".item_color option:selected").text());
	// alert();
});
$('.dropdown_style').change(function(){
	$('.size_select').text($(".item_size option:selected").text());
	// alert();
});
$('.dropdown_style').change(function(){
	$('.material_select').text($(".item_material option:selected").text());
	// alert();
});
$('.dropdown_quantity').change(function(){
	$('.quantity_select').text($(".quantity option:selected").text());
	// alert();
});
$('.dropdown_sets').change(function(){
	$('.sets_select').text($(".item_sets option:selected").text());
	UpdateAmount();
	// alert();
});
$('.dropdown_material').change(function(){
	$('.material_select').text($(".item_material option:selected").text());
	UpdateAmount();
	// alert();
});
$('.extra').change(function(){
	var value = "";
	var price;
	$('.extra').each(function(){
		if ($(this).is(":checked")) {
			value = value + "+" + $(this).attr("name") + " ";
			price = value + $(this).attr("price"); + " ";
		}
	});
	$("#extravalue").val(value);
	UpdateAmount();

});


$( document ).ready(function (){
	$('.style_select').text($(".item_style option:selected").text());
	$('.length_select').text($(".item_length option:selected").text());
	$('.color_select').text($(".item_color option:selected").text());
	$('.size_select').text($(".item_size option:selected").text());
	$('.quantity_select').text($(".quantity option:selected").text());
	$('.sets_select').text($(".item_sets option:selected").text());	
	$('.material_select').text($(".item_material option:selected").text());	
});

//Change size of text for sign up when on mobile 
$( document ).ready(function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$("#mc-embedded-subscribe").css("font-size", "24");
	}
});

$(".quantity").change(function(){
	$('.quantity_input').val($(".quantity option:selected").text());
	// alert($(".quantity option:selected").text());
});

var UpdateAmount = function() {
	//Get original price
	var price = parseInt($(".item-price").attr("original"));
	console.log(price);

	//if part of a set - change the base price
	if ($(".item_sets").length == 1) {
		console.log("Changing Sets");
		price = parseInt($(".item_sets option:selected").attr("price"));
	}
	
	// Add Extras
	$('.extra').each(function(){
		console.log("Changing Extras");
		if ($(this).is(":checked")) {
			price = price + parseInt($(this).attr("price"));
		}
	});

	// Add additional materials cost
	if ($(".item_material").length == 1) {
		console.log("Changing Material");
		price += parseInt($(".item_material option:selected").attr("material_price"));
		
	}

	// Add final price
	var newPrice = price;
	$("#priceofitem").val(newPrice);
	$(".item-price").text(newPrice);
	$(".item-price").text("$"+$(".item-price").text()+".00");



}

// $(".extra").change(function(){
	
// });
//OLD CODE

// // Finds each child after #carousel-images
// $('.small-image-box').bind('click', function(event) {
// 	// Make the image large
// 	$(".zoom-icon").hide();
// 	$image = $(event.target);
// 	$parent = $image.parent();
// 	if ($parent.css('z-index') == 0)
// 	{
// 		$parent.animate({
// 			width: "100%",
// 			height: "100%"
// 		}, 200 );
// 		$parent.css('z-index', 1);
// 		$image.children().css('opacity', 1);
// 	}
// 	//Make the image small
// 	else if($parent.css('width') == "510px")
// 	{	
// 		$parent.animate({
// 			width: "49%",
// 			height: "49%"
// 		}, 200, function(){
// 			$parent.css('z-index', 0);
// 			$image.css('opacity', "auto");
// 			if ($('.small-image-box:hover').length > 0 )
// 			{
// 				$(this).children(".zoom-icon").show();	
// 			}
// 		})
// 	}
// });
// $(".small-image-box").mouseover(event, function(){
	
// 	if ($(this).css('z-index') == 0)
// 	{
// 		$(this).children(".zoom-icon").show();
// 	}
// })
// $(".small-image-box").mouseleave(function(){
// 	$(".zoom-icon").hide();
// });