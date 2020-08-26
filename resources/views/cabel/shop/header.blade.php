<div class="site-header__top collapsed">
    <div class="container site-header__container">
        <div class="site-header__top__block site-header__schedule">
            <img src="img/new/icons/clock.svg" alt="" style="height: 16px;">
            <p class="site-header__schedule__days site-header__hlight"> Пн.-Птн.:</p>
            <p class="site-header__schedule__time">с 09:00 до 18:00</p></div>
        <a href="/" class="site-header__top__block site-header__region map-marker"><span
                class="site-header__region__caption site-header__hlight">Ваш регион: </span><span
                class="site-header__region__name" id="user-city"></span></a>
        <div class="site-header__top__block site-header__search">


            <form method="GET" action="{{ route('search.result') }}" class="site-header__search__form form"
                  autocomplete="off">
                <input class="site-header__search__input" type="text" id="search" name="search" placeholder="Поиск...">
                <button class="site-header__search__btn myicon myicon__search" type="submit"></button>
            </form>
        </div>


        <a href="#"
           class="site-header__top__block site-header__basket basket-marker"><span
                class="site-header__basket__caption">Товара</span><span
                class="site-header__basket__products-count">(0)</span></a>

        <a href="/login" class="site-header__top__block site-header__signin login-marker">
            <span class="site-header__signin__caption">Войти</span>
        </a>
        <a href="/#" class="site-header__top__menu"></a>
    </div>
</div>
<div class="site-header__middle">
    <div class="container">
        <img src="/img/new/icons/logo.svg" class="site-header__logo">

        </a>
        <div class="site-header__middle__block site-header__intro"><p>
                Оптовые поставки кабельно-проводниковой продукции
            </p>
        </div>
        <div class="site-header__middle__block site-header__contacts">
            <div class="site-header__email"><img src="img/new/icons/mail.svg" alt="">info@riokabel.ru</div>
            <div class="site-header__phone"><span class="city">СПб:</span><span
                    class="phone-number">+7 (000) 000-00-00</span>
            </div>
            <!-- <div class="site-header__phone"><span class="city">Мск.:</span><span class="phone-number">+7 (499) 000-00-00</span>
            </div>
            <div class="site-header__phone"><span class="city">Мур.:</span><span class="phone-number">+7 (815) 000-00-00</span>
            </div> -->
            <button class="site-header__callback phone-marker" onclick="jivo_api.open();">Вам
                перезвонить?
            </button>
        </div>
    </div>
</div>
