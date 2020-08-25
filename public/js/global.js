$(document).ready(function(){

	SmoothScroll({
		animationTime: 400,
		stepSize: 100,

		accelerationDelta: 50,
		accelerationMax: 3,

		keyboardSupport: true,
		arrowScroll: 50
	});

	$('header .menu .item').on('click', function(){
		$(this).siblings().removeClass('current');
		$(this).addClass('current');
	});

	var start = $('.start-search'),
		morphSearch = $('#morphsearch'),
		input = morphSearch.find('input.morphsearch-input'),
		ctrlClose = morphSearch.find('span.morphsearch-close'),
		body = $('body'),
		isOpen = false,

	toggleSearch = function(e){
		if(e.type.toLowerCase() === 'focus' && isOpen) return false;

		var offsets = morphsearch.getBoundingClientRect();

		if(isOpen){

			morphSearch.removeClass('open');
			body.removeClass('locked');

			if(input.value !== '') {

				setTimeout(function(){
					morphSearch.addClass('hideInput');

					setTimeout(function(){
						morphSearch.removeClass('hideInput');
						input.value = '';
					}, 300 );
				}, 500);
			}
			input.blur();
		} else {
			morphSearch.addClass('open');
			body.addClass('locked');
		};
		isOpen = !isOpen;
	};

	start.on('click', toggleSearch);
	ctrlClose.on('click', toggleSearch);

	$(document).on('keydown', function(e) {
		var keyCode = e.keyCode || e.which;

		if(keyCode === 27 && isOpen) {
			toggleSearch(e);
		};
	});

	morphSearch.find('button[type="submit"]').on('click', function(e){
		e.preventDefault();
	});

	var nav_link = $('header .menu li, aside .links-block');
    var url = window.location.pathname.split('/');
	nav_link.removeClass('current');
	nav_link.find('a[href="/' + url[1] +'"]').parent().addClass('current');
});