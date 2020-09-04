@if($getProductsCategory && count($getProductsCategory) > 0)
    <div class="catalog__wrapper">
        <div class="container">
            <div class="catalog__container">
                <div class="catalog__fastsearch">
                    <!-- <div class="catalog__fastsearch__input" onclick= "showFun()"><p>Быстрый поиск</p></div> -->
                    <div class="catalog__fastsearch__input" onclick="showFun()"><p>Быстрый поиск</p></div>
                    <div class="catalog__fastsearch__hiddencontent">
                        <p id="catalog_show_1">Кабель силовой</p>
                        <ul id="catalog_1" class="catalog__hiddencontent">
                            <li>Lorem ipsum.</li>
                            <li>Fugiat, nam.</li>
                            <li>Molestias, id!</li>
                            <li>Nihil, dolore.</li>
                            <li>Quaerat, ab.</li>
                            <li>Eum, cumque!</li>
                            <li>Eveniet, debitis?</li>
                        </ul>
                        <p id="catalog_show_2">Кабель управления</p>
                        <ul id="catalog_2" class="catalog__hiddencontent">
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                        </ul>
                        <p id="catalog_show_3">Кабель монтажный универсальный</p>
                        <ul id="catalog_3" class="catalog__hiddencontent">
                            <li>Lorem ipsum.</li>
                            <li>Fugiat, nam.</li>
                            <li>Molestias, id!</li>
                            <li>Nihil, dolore.</li>
                            <li>Quaerat, ab.</li>
                            <li>Eum, cumque!</li>
                            <li>Eveniet, debitis?</li>
                        </ul>
                        <p id="catalog_show_4">Кабель контрольный</p>
                        <ul id="catalog_4" class="catalog__hiddencontent">
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                            <li>ВВГНГ</li>
                            <li>ППРСВ</li>
                        </ul>
                        <p id="catalog_show_5">Кабель оптический</p>
                        <ul id="catalog_5" class="catalog__hiddencontent">
                            <li>Lorem ipsum.</li>
                            <li>Fugiat, nam.</li>
                            <li>Molestias, id!</li>
                            <li>Nihil, dolore.</li>
                            <li>Quaerat, ab.</li>
                            <li>Eum, cumque!</li>
                            <li>Eveniet, debitis?</li>
                        </ul>
                    </div>
                </div>
                <div class="catalog__content">
                    <div class="catalog__content__topcontent">
                        <div class="catalog__content__topcontent__tabs">
                            <div id="description" class="catalog__content__topcontent__button" onclick="showDescr()">
                                Описание
                            </div>
                            <div id="order" class="catalog__content__topcontent__button" onclick="showOrder()">Заказ
                            </div>
                        </div>
                        <div id="description_content" class="catalog__content__tabs__content">
                            {!! $category->excerpt !!}
                        </div>
                        <div id="order_content" class="catalog__content__tabs__content">
                            <h3>Ответим на заявку в течение 15 мин</h3>
                            <form action="">
                                <label for="">Имя</label>
                                <input type="text" placeholder="Иван Иванов">
                                <label for="">E-mail</label>
                                <input type="text" placeholder="ivanov@3xample.com">
                                <label for="">Название кабеля</label>
                                <input type="text" placeholder="ПП123х33">
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                    <div class="catalog__content__maincontent">
                        @foreach($getProductsCategory as $product)
                        <div class="catalog__content__item">
                            <a href="{{ $product->slug }}">{{ $product->title }}</a>
                            <div class="catalog__content__item__have" style="color: green">Есть в наличии</div>
                            <div class="catalog__content__item__price">Цена: по запросу</div>
                            <div class="catalog__content__item__input"><input type="text" placeholder="1 м."></div>
                            <div class="catalog__content__item__button">
                                <button>Заказать</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="alert alert-primary" role="alert">
            Товаров не найдено...
        </div>
    </div>
@endif
