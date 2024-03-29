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
                           class="promo-block__slider__arrow promo-block__slider__arrow-left">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                            </svg>
                        </a><a
                            href="javascript:void(0)"
                            class="promo-block__slider__arrow promo-block__slider__arrow-right">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
