@extends(env('THEME').'.layouts.master')

@section('header')
    {!! $header !!}
@endsection

@section('navigation')
    {!! $navigation !!}
@endsection

@section('slider')
    {!! $slidersContentBlock !!}
@endsection

@section('hit')
    {!! $hitProductsContentBlock !!}
@endsection

@section('categories')
    {!! $categoriesContentBlock !!}
@endsection

@section('scheme_of_work')
    <div class="work-shcheme__wrapper">
        <div class="container">
            <h3><span>Наша схема работы</span></h3>
            <div class="work-shcheme__inner"><p>Деятельность нашей компании ООО "Рио Кабель", направлена на
                    оптовые поставки кабельно-проводниковой продукции и электротехнических материалов на территории
                    России и стран СНГ. Работая с нами, Вы тратите меньше - с нами выгодно.</p>
                <!-- <img src="/inc/work-scheme.jpg" alt=""> -->
                <!--                     <div class="work-shcheme__container">

                                    </div> -->
            </div>
            <div class="work-shcheme__content">
                <div class="work-shcheme__container">
                    <div class="work-shcheme__item">
                        <img src="img/new/icons/howwework_1.svg" alt="">
                        <img src="img/new/icons/arrow.svg" alt="">
                    </div>
                    <p>Вы осуществляете заказ</p>
                </div>
                <div class="work-shcheme__container">
                    <div class="work-shcheme__item">
                        <img src="img/new/icons/howwework_2.svg" alt="">
                        <img src="img/new/icons/arrow.svg" alt="">
                    </div>
                    <p>Мы обрабатываем заявку за 15 минут</p>
                </div>
                <div class="work-shcheme__container">
                    <div class="work-shcheme__item">
                        <img src="img/new/icons/howwework_3.svg" alt="">
                        <img src="img/new/icons/arrow.svg" alt="">
                    </div>
                    <p>Вы оплачиваете счет</p>
                </div>
                <div class="work-shcheme__container">
                    <div class="work-shcheme__item">
                        <img src="img/new/icons/howwework_4.svg" alt="">

                    </div>
                    <p>Мы доставляем кабель по согласованию</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('trust')
    <div class="on-trust__wrapper">
        <div class="container"><h3><span>Нам доверяют</span></h3>
            <div class="on-trust">
                <div class="on-trust__inner">
                    <div class="on-trust__item">
                        <div class="on-trust__item__img">
                            <a href=/img/new/on-trust.jpg class="on-trust__item__img_a"
                               target="_blank" title="Нажмите, для просмотра в полном размере...">
                                <img alt="альтернативное название картинки" style="margin:0;padding:0;border:0;"
                                     src=/img/new/on-trust.jpg></a>
                        </div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                    <div class="on-trust__item">
                        <div class="on-trust__item__img"><img src="/img/new/on-trust.jpg" alt=""></div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                    <div class="on-trust__item">
                        <div class="on-trust__item__img"><img src="/img/new/on-trust.jpg" alt=""></div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                    <div class="on-trust__item">
                        <div class="on-trust__item__img"><img src="/img/new/on-trust.jpg" alt=""></div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                    <div class="on-trust__item">
                        <div class="on-trust__item__img"><img src="/img/new/on-trust.jpg" alt=""></div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                    <div class="on-trust__item">
                        <div class="on-trust__item__img"><img src="/img/new/on-trust.jpg" alt=""></div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                    <div class="on-trust__item">
                        <div class="on-trust__item__img"><img src="/img/new/on-trust.jpg" alt=""></div>
                        <div class="on-trust__item__header"><span>ООО “ПерспективаЭллектро”</span>
                            Сидоров Н.А., директор
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="on-trust__arrow on-trust__arrow-left fa fa-angle-left"></a><a
                    href="javascript:void(0)" class="on-trust__arrow on-trust__arrow-right fa fa-angle-right"></a>
            </div>
        </div>
    </div>
@endsection

@section('feedback')
    {!! $feedbackContentBlock !!}
@endsection

@section('partners')
    <div class="partners__wrapper">
        <div class="container"><h3><span>Наши партнеры</span></h3>
            <div class="partners__inner">
                <div class="partners__slider">
                    <div class="partners__slider__inner">
                        <div class="partners__slider__item"><img src="/img/new/partner_amk.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_legrand.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_rubinsk.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_sevkabel.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_tatkabel.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_amk.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_legrand.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_rubinsk.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_sevkabel.png" alt=""></div>
                        <div class="partners__slider__item"><img src="/img/new/partner_tatkabel.png" alt=""></div>
                    </div>
                    <a href="javascript:void(0)"
                       class="partners__slider__arrow partners__slider__arrow-left fa fa-angle-left"
                       style="color: #D68458;"></a><a
                        href="javascript:void(0)"
                        class="partners__slider__arrow partners__slider__arrow-right fa fa-angle-right"
                        style="color: #D68458;"></a></div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    {!! $footer !!}
@endsection
