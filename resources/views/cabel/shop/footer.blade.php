<footer class="site-footer">
    <div class="site-footer__top site-footer__delivery">
        <div class="container">
            <div class="row">
                <div class="six columns site-footer__delivery__item delivery-marker">
                    <span>Бесплатная доставка</span>
                    <small>В пределах КАД</small>
                </div>
                <div class="six columns site-footer__delivery__item phoneicon-marker"><span>8-800-350-00-21</span>
                    <small>Бесплатно по РФ</small>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__middle">
        <div class="container">
            <div class="row">
                <div class="three columns site-footer__middle__block"><h4><span>Разделы сайта</span></h4>
                    <ul class="site-footer__menu">
                        @if($menu)
                        @foreach($menu as $item)
                            <li><a href="/{{ $item->path }}">{{ $item->title }}</a></li>
                        @endforeach
                        @else
                            <li><a href="/">Главная</a></li>
                            @endif
                    </ul>
                </div>

                <div class="three columns site-footer__middle__block site-footer__offices__wrap">
                    <div class="site-footer__offices"><h4><span>Наши адреса</span></h4>
                        <div class="site-footer__offices__item">
                            <div class="site-footer__offices__item-inner wicon wicon__location">
                                <div class="city">г. Санкт-Петербург</div>
                                <div class="address">Московское шоссе, 25к1 Б/Ц "ПРЕСТИЖ»</div>
                                <a href="/#">Смотреть на карте</a></div>
                        </div>

                    </div>
                </div>
                <div class="three columns site-footer__middle__block">
                    <div class="site-footer__contacts"><h4><span>Контакты</span></h4>
                        <div class="site-footer__contacts__item">
                            <div class="site-footer__contacts__item-inner wicon wicon__phone-white">
                                <div class="phone">+ 7 (812) 000 00 00</div>
                                <div class="city">г. Санкт-Петербург</div>
                                <a href="mailto:">info@cable-trader.ru</a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
