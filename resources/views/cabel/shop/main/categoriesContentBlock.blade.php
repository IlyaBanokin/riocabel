@if($getCategories)
    <div class="categories-list__wrapper">
        <div class="container"><h3><span>Категории</span></h3>
            <div class="categories-list">
                <div class="categories-list__inner">
                    @foreach($getCategories as $category)
                        <div class="categories-list__item">
                            <div class="categories-list__item__header">{{ $category->title }}</div>
                            <div class="categories-list__item__img"><img src="/img/new/mufta_1.jpg" alt="{{ $category->title }}"></div>
                            <div class="categories-list__item__descr"><p>{{ $category->excerpt }}</p></div>
                            <div class="categories-list__btn-wrap"><a href="#"
                                                                      class="categories-list__btn"><span>Перейти</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="javascript:void(0)"
                   class="categories-list__arrow categories-list__arrow-left fa fa-angle-left"></a><a
                    href="javascript:void(0)"
                    class="categories-list__arrow categories-list__arrow-right fa fa-angle-right"></a></div>
        </div>
    </div>
@endif
