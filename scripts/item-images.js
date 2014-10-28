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
$('.dropdown_quantity').change(function(){
	$('.quantity_select').text($(".quantity option:selected").text());
	// alert();
});
$('.dropdown_sets').change(function(){
	$('.sets_select').text($(".item_sets option:selected").text());
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
});

$(".quantity").change(function(){
	$('.quantity_input').val($(".quantity option:selected").text());
	// alert($(".quantity option:selected").text());
});

var UpdateAmount = function() {
	var price = 0;
	$('.extra').each(function(){
		if ($(this).is(":checked")) {
			price = price + parseInt($(this).attr("price"));
		}
	});
	if ($(".item_sets").length == 1) {
		$("#priceofitem").val(parseInt($(".item_sets option:selected").attr("price"))+price);
		$(".item-price").text(parseInt($(".item_sets option:selected").attr("price"))+price+".00");
		$(".item-price").text("$"+$(".item-price").text());
	}
	else {
		$("#priceofitem").val(price+parseInt($(".item-price").attr("original")));
		$(".item-price").text(price+parseInt($(".item-price").attr("original")));
		$(".item-price").text("$"+$(".item-price").text()+".00");	
	}
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