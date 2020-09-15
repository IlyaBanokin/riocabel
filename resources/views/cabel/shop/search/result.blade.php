@if($products && count($products) > 0)

    <div class="catalog__wrapper">
        <div class="container">
            <div class="catalog__container">
                <div class="catalog__content">
                    <div class="catalog__content__maincontent">
                        @foreach($products as $product)
                            @foreach($categoryProduct as $slug)
                            <div class="catalog__content__item">
                                <a href="{{ route('product.info', ['catalog' => $slug->slug, 'slug' => $product->slug]) }}">{{ $product->title }}</a>
                                <div class="catalog__content__item__have" style="color: green">Есть в наличии</div>
                                <div class="catalog__content__item__price">Цена: по запросу</div>
                                <div class="catalog__content__item__input"><input type="text" placeholder="1 м."></div>
                                <div class="catalog__content__item__button">
                                    <button>Заказать</button>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            @if($products->lastPage() > 0)
                {{ $products->links() }}
            @endif
            </div>
            </div>
@else
    <div class="products-list__wrapper">
        <div class="container"><h3><span>Товаров не найдено</span></h3>
        </div>
    </div>
@endif
