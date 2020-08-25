$(document).ready(function(){

    $('.site-header__top__menu').click(function(){
        $('.site-header__top').toggleClass('collapsed');
    });


    $('.promo-block__slider').slick({
        autoplay: true,
        prevArrow: '.promo-block__slider__arrow-left',
        nextArrow: '.promo-block__slider__arrow-right',
        arrows: true,
        dots: true,
        mobileFirst: true
    });


    $('.categories-list__inner').slick({
        autoplay: true,
        prevArrow: '.categories-list__arrow-left',
        nextArrow: '.categories-list__arrow-right',
        arrows: true,
        dots: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
    });


    $('.on-trust__inner').slick({
        autoplay: false,
        prevArrow: '.on-trust__arrow-left',
        nextArrow: '.on-trust__arrow-right',
        arrows: true,
        dots: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
    });

    $('.partners__slider__inner').slick({
        autoplay: false,
        prevArrow: '.partners__slider__arrow-left',
        nextArrow: '.partners__slider__arrow-right',
        arrows: true,
        dots: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false
                }
            }
        ]
    });


    $('.viewed-products__inner').slick({
        autoplay: false,
        prevArrow: '.viewed-products__list__arrow-left',
        nextArrow: '.viewed-products__list__arrow-right',
        arrows: true,
        dots: false,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });

});
/*Вывод скрытых продуктов на главной*/
$(document).ready(function(){
    $('.toggle_block').click(function(){
        $('.hit_block').slideToggle(300, function(){
            if ($(this).is(':hidden')) {
                $('.toggle_block').html('Показать еще +12');
                $('.toggle_block').removeClass('open');
            } else {
                $('.toggle_block').html('Скрыть');
                $('.toggle_block').addClass('open');
            }
        });
        return false;
    });
});
