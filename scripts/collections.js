// select visible children
var visibleDivs = $('.collections div:visible');
// alert(visibleDivs.length);
// use whatever width calculation you'd like...
var pageWidth = 761;
var targetWidth = pageWidth / (visibleDivs.length / 2);
if (targetWidth === pageWidth) {
	targetWidth = 200;
}
var targetHeight = targetWidth * .75;

// apply the width to the divs
visibleDivs.width(targetWidth);
visibleDivs.height(targetHeight);

$("document").ready(function(){
	$(".collection1").hide();
	$(".collection2").hide();
	$(".collection3").hide();
	$(".collection4").hide();
	$(".collection5").hide();
});

$(".collection-button").click(function(event){
	event.preventDefault();
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	$('.carousel').slickRemove(0);
	if($(this).hasClass("collection-button1"))
	{	
		$('.carousel').slickAdd('"<div><img src="/images/collections/fw14/1.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel-name').text("FW 2014");
	}
	if($(this).hasClass("collection-button2"))
	{
		$('.carousel').slickAdd('"<div><img src="/images/collections/ss14/1.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/ss14/2.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/ss14/3.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/ss14/4.jpg" alt="Resolve Jewelry Banner"></div>"');	
		$('.carousel-name').text("SS 2014");
	}
	if($(this).hasClass("collection-button3"))
	{
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/1.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/2.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/3.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/4.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/5.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/6.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/7.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/8.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/collections/fine lines/9.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel-name').text("Fine Lines");

	}
	if($(this).hasClass("collection-button4"))
	{
		$('.carousel').slickAdd('"<div><img src="/images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>"');
	}
	if($(this).hasClass("collection-button5"))
	{
		$('.carousel').slickAdd('"<div><img src="/images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>"');
		$('.carousel').slickAdd('"<div><img src="/images/carousel-4.jpg" alt="Resolve Jewelry Banner"></div>"');
	}
	// $('.carousel').slickGoTo(0);
	$('#navigation').scrollView();
	$('.carousel-name').css("padding-left", "200px");
});

$.fn.scrollView = function() {
	return this.each(function() {
		$('html,body').animate({
			scrollTop: $(this).offset().top
		}, 500);
	});
}