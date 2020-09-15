@if($getProductsCategory && count($getProductsCategory) > 0)
    <div class="maincatalog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><span>{{ $slug }}</span></h3>
                </div>
                <ul class="post-breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="{{ route('shop.categories.index') }}">Каталог</a></li>
                    <li>{{ $slug }}</li>
                </ul>
            </div>
            <div class="catalog__container">
                <div class="catalog__fastsearch">
                    <!-- <div class="catalog__fastsearch__input" onclick= "showFun()"><p>Быстрый поиск</p></div> -->
                    <div class="catalog__fastsearch__input" onclick="showFun()"><p>Поиск</p></div>
                    <div class="catalog__fastsearch__hiddencontent">
                        @foreach($getCatalog as $cat)
                            <p id="catalog_show_{{ $cat->id }}"><img class="arrow-right"
                                                                     src="/img/new/icons/arrow-right.png">{{ $cat->title }}
                            </p>
                            @php $query = \Illuminate\Support\Facades\DB::select("SELECT id, title, slug FROM categories WHERE parent_id = $cat->id") ;
                            @endphp
                            <ul id="catalog_{{ $cat->id }}" class="catalog__hiddencontent">
                                @foreach($query as $item)
                                    <li class="navigation-left"><a
                                            href="{{ route('shop.categories.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
                <div class="catalog__content">
                    <div class="catalog__content__topcontent">
                        <div class="catalog__content__topcontent__tabs">
                            <div id="description" class="catalog__content__topcontent__button" onclick="showDescr()">
                                Описание
                            </div>
                            <div id="order" class="catalog__content__topcontent__button" onclick="showOrder()">Быстрый
                                заказ
                            </div>
                        </div>
                        <div id="description_content" class="catalog__content__tabs__content">
                            {!! $category->excerpt !!}
                        </div>
                        <div id="order_content" class="catalog__content__tabs__content">
                            <h3>* Ответим на заявку в течение 15 мин</h3>
                            <form class="input-order-catalog" method="POST" data-toggle="validator" role="form"
                                  action="{{ route('shop.main.store') }}">
                                @csrf
                                <div class="form-group has-feedback">
                                    <label for="name" class="control-label">Имя *</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Иван Иванов"
                                           data-error="Поле обязательно для заполнения (мин. 2 символа)"
                                           data-minlength="2" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors" style="color:red;"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="email" class="control-label">E-mail *</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                           placeholder="ivanov@3xample.com"
                                           data-error="Поле обязательно для заполнения (мин. 5 символов)"
                                           data-minlength="5" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors" style="color:red;"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="phone" class="control-label">Телефон *</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                           placeholder="8-9**-***-**-**"
                                           data-error="Поле обязательно для заполнения (мин. 5 символов)"
                                           data-minlength="5" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors" style="color:red;"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="text" class="control-label">Название кабеля *</label>
                                    <input type="text" class="form-control" name="text" id="text"
                                           placeholder="ВВГНГ-ls 3х2.5"
                                           data-error="Поле обязательно для заполнения (мин. 2 символов)"
                                           data-minlength="2" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors" style="color:red;"></div>
                                </div>
                                <input style="margin-top: 12px;" type="submit">
                            </form>
                        </div>
                    </div>
                    <div class="catalog__content__maincontent">
                        @foreach($getProductsCategory as $product)
                            <div class="catalog__content__item">
                                <a href="{{ route('product.info', ['catalog' => $slug, 'slug' => $product->slug]) }}">{{ $product->title }}</a>
                                <div class="catalog__content__item__have" style="color: green">Есть в наличии</div>
                                <div class="catalog__content__item__price">Цена: по запросу</div>
                                <div class="catalog__content__item__input"><input type="text" placeholder="1 м."></div>
                                <div class="catalog__content__item__button">
                                    <button>Заказать</button>
                                </div>
                            </div>
                        @endforeach
                        @if($getProductsCategory->lastPage() > 0)
                            {{ $getProductsCategory->links() }}
                        @endif
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
