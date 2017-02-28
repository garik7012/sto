//OWL

$(document).ready(function () {
	var owl = $('.owl-carousel-2');
	owl.owlCarousel({
		items: 12,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000
	});


	var owl = $('.owl-carousel-1');
	owl.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000
	});
});

//FIXMENU
jQuery(document).ready(function () {

	jQuery(window).scroll(function () {
		if (jQuery(window).scrollTop() >= 43) {
			jQuery('body').addClass('fixed');
		} else jQuery('body').removeClass('fixed');
	});


});

$(document).ready(function () {
	$("#recom-slider").owlCarousel({
		items: 3,
		loop: !0,
		dots: !0
	})
});
