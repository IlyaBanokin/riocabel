<div class="maincatalog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><span>Каталог</span></h3>
            </div>
        </div>
        @if($getCatalog)
            <div class="row">
                @foreach($getCatalog as $category)
                    @php $query = \Illuminate\Support\Facades\DB::select("SELECT id, title, slug FROM categories WHERE parent_id = $category->id") ;

                    @endphp
                <div class="col-lg-4">
                    <div class="maincatalog-container">
                        <div class="maincatalog-title">
                            <img src="/img/new/icons/coil.svg" alt="">
                            <div class="maincatalog-title-text">
                                {{ $category->title }}
                            </div>
                        </div>
                        <div class="maincatalog-items">
                    @foreach($query as $item)
                                <a href="{{ route('shop.categories.show', ['slug' => $item->slug]) }}"> <i class="fa fa-arrow-circle-o-right" style="padding: 5px" aria-hidden="true"></i>{{ $item->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@else
    <div class="col-lg-4">
        <div class="maincatalog-container">
            <div class="maincatalog-title">
                <img src="/img/new/icons/coil.svg" alt="">
                <div class="maincatalog-title-text">
                    Категория
                    <p>отсутсвует</p>
                </div>
            </div>
            <div class="maincatalog-items">
                <a href="">Товаров нет</a>
            </div>
        </div>
    </div>
@endif
