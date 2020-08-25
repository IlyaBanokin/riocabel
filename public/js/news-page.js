$(document).ready(function(){
	var simple_slider = $('.simple-slider');
	var advanced_slider = $('.advanced-slider');
	var last_slider = $('.last-slider');
	
	simple_slider.owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: true,
		navText: '',
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
	});

	advanced_slider.owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: false,
		navText: '',
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',

		thumbs: true,
		thumbsPrerendered: true,
		thumbContainerClass: 'thumbnails',
		thumbItemClass: 'thumb'
	});

	last_slider.owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		navText: '',
		responsive: {
			0: {
				items: 2
			},
			1240: {
				items: 2
			},
			1400: {
				items: 3
			}
		}
	});

	$('.share-block .trigger').on('click', function(){
		$(this).closest('.share-block').toggleClass('active');
	});
}); 