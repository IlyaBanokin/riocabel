@if($getSlide && count($getSlide) > 0)
    <div class="promo-block">
        <div class="container">
            <div class="row">
                <div class="twelve column">
                    <div class="promo-block__slider-wrapper">
                        <div class="promo-block__slider">
                            @foreach($getSlide as $slide)
                                <div class="promo-block__slider__slide"><h3><span>{{ $slide->title }}</span>
                                    </h3></div>
                            @endforeach
                        </div>
                        <a href="javascript:void(0)"
                           class="promo-block__slider__arrow promo-block__slider__arrow-left fa fa-angle-left"></a><a
                            href="javascript:void(0)"
                            class="promo-block__slider__arrow promo-block__slider__arrow-right fa fa-angle-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
