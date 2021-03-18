<div class="container">
    <div id="header" class="header">
        <a href="{{ route('home') }}" class="header__logo logo">
            Rotersand Jewelry
        </a>
        <nav class="header__nav">
            <ul class="nav__list">
                <li class="nav__item {{ Route::is('shop') ? 'active' : '' }}">
                    <a href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav__item {{ Route::is('categories') ? 'active' : '' }}">
                    <a href="{{ route('categories') }}">Categories</a>
                </li>
                <li class="nav__item {{ Route::is('basket') ? 'active' : '' }}">
                    <a href="{{ route('basket') }}">Basket</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
