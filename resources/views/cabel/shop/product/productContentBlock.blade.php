<div class="my-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><span>Информация</span></h3>
            </div>
            <ul class="post-breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="{{ route('shop.categories.index') }}">Каталог</a></li>
                <li><a href="{{ route('shop.categories.show', ['slug' => $getCategoryProduct->slug])  }}">{{ $getCategoryProduct->title }}</a></li>
                <li>{{ $product->title }}</li>
            </ul>
        </div>
        <!--ГАЛЕРЕЯ-->
        <div class="my-product-topcontent">
            <div class="my-product-topcontent-left">
                <img src="/inc/product.png" data-imagezoom="true" alt="Кабель HoldCab EPR LV WHF(A) 10x1-0,66">
            </div>
            <!-- END ГАЛЕРЕЯ-->
            <div class="my-product-topcontent-right">
                <h2 class="title-product"> {{ $product->title }}</h2>
                <div class="about-toch-prond mb-4">
                    <span class="item-stock">Категория: <span class="text-stock" style="color: green"><a
                                href="{{ route('shop.categories.show', ['slug' => $getCategoryProduct->slug]) }}">{{ $getCategoryProduct->title }}</a></span></span>
                </div>
                <div class="about-toch-prond mb-4">
                    <span class="item-stock">На складе: <span class="text-stock"
                                                              style="color: green">В наличии</span></span>
                </div>
                <div class="about-toch-prond mb-4">
                    <span class="item-stock">Цена: <span class="text-stock"
                                                         style="color: green">По запросу</span></span>
                </div>
                <!--Cart my.js-->
                <div class="product-quantity">
                    <div class="quantity">
                        <p>Длина</p>
                        <input type="number" value="1" name="quantity">
                        <a style="text-decoration: none" id="productAdd" data-id="161"
                           href="https://svd-holding.ru/cart/add?id=161" type="button" class="toch-button"><img
                                src="/img/new/icons/buy.svg" alt="">
                            <p>Добавить</p></a>
                    </div>
                    <!-- <hr> -->
                </div>
            </div>
        </div>
        <p>{{ $product->content }}</p>
        <!--  -->
        <!--  <div class="products-list__more-wrap">
             <button class="products-list__more-btn"><span>показать еще +12</span></button>
         </div> -->
    </div>
</div>
