@if($hitProducts)
    <div class="products-list__wrapper">
        <div class="container"><h3><span>Популярные товары</span></h3>
            <div class="products-list">
                <div class="products-list__decorator products-list__decorator-top"></div>
                <div class="products-list__decorator products-list__decorator-bottom"></div>
                <div class="products-list__inner">
                    @foreach($hitProducts as $product)

                            <div class="products-list__item">
                                <div class="products-list__item__header">{{ $product->title }}</div>
                                <div class="products-list__item__img"><img src="/inc/product.png"
                                                                           alt="{{ $product->title }} купить недорого">
                                </div>
                                <div class="products-list__item__price-old">Статус: <span>Есть на складе</span></div>
                                <div class="products-list__basket-btn-wrap">
                                    <button class="products-list__basket-btn"><span>В корзину</span></button>
                                </div>
                                @foreach($categoryProduct as $slug)
                                <div class="products-list__one-click-wrap"><a
                                        href="{{ route('product.info', ['catalog' => $slug->slug, 'slug' => $product->slug]) }}"
                                        class="products-list__one-click">Подробнее</a></div>
                            </div>
                        @endforeach
                    @endforeach
                    @foreach($hitProductsHidden as $product)
                        @foreach($categoryProductHidden as $slug)
                            <div class="products-list__item hit_block" style="display: none;">
                                <div class="products-list__item__header">{{ $product->title }}</div>
                                <div class="products-list__item__img"><img src="/inc/product.png"
                                                                           alt="{{ $product->title }} купить недорого">
                                </div>
                                <div class="products-list__item__price-old">Статус: <span>Есть на складе</span></div>
                                <div class="products-list__basket-btn-wrap">
                                    <button class="products-list__basket-btn"><span>В корзину</span></button>
                                </div>
                                <div class="products-list__one-click-wrap"><a href="{{ route('product.info', ['catalog' => $slug->slug, 'slug' => $product->slug]) }}"
                                                                              class="products-list__one-click">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="products-list__more-wrap">
                <button class="products-list__more-btn toggle_block"><span>Показать еще +12</span></button>
            </div>
        </div>
    </div>
@else

@endif
