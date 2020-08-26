@if($products && count($products) > 0)
    <div class="products-list__wrapper">
        <div class="container"><h3><span>Поиск по запросу</span></h3>
            <div class="products-list">
                <div class="products-list__decorator products-list__decorator-top"></div>
                <div class="products-list__decorator products-list__decorator-bottom"></div>
                <div class="products-list__inner">
                    @foreach($products as $product)
                        <div class="products-list__item">
                            <div class="products-list__item__header">{{ $product->title }}</div>
                            <div class="products-list__item__img"><img src="/inc/product.png"
                                                                       alt="{{ $product->title }} купить недорого">
                            </div>
                            <div class="products-list__item__price-old">Статус: <span>Есть на складе</span></div>
                            <div class="products-list__basket-btn-wrap">
                                <button class="products-list__basket-btn"><span>В корзину</span></button>
                            </div>
                            <div class="products-list__one-click-wrap"><a href="{{ $product->slug }}"
                                                                          class="products-list__one-click">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@else
    <div class="products-list__wrapper">
        <div class="container"><h3><span>Товаров не найдено</span></h3>
        </div>
    </div>
@endif
