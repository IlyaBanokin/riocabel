$(document).ready(function(){

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
});