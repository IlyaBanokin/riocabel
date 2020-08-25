$(document).ready(function(){
	var k=0;
	$('.site-header__burger').click(function(){
		if(k==0){
			$('.main-menu').show();
			k=1;
		}else{
			$('.main-menu').hide();
			k=0;
		}
	});

	var nav = $('.site-header__bottom');
 
	$(window).scroll(function () {
		if ($(this).scrollTop() > 290) {
			nav.addClass("f-nav");
		} else {
			nav.removeClass("f-nav");
		}
	});
});