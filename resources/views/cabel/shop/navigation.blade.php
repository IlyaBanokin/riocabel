@if($menu && count($menu) > 0)
<div class="site-header__bottom">
    <div class="container site-header__menu">
        <div class="site-header__burger">
            <img src="img/new/icons/menu.svg" alt="">
        </div>
        <ul class="main-menu">
            @foreach($menu as $item)
            <li class="{{ Request::is($item->path) ? 'active' : '' }}">
                <a href="/{{ $item->path }}">
                    {{ $item->title }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
