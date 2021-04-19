<div class="container">
    <div id="header" class="header">
        <a href="{{ route('home') }}" class="header__logo logo">
            Rotersand Jewelry
        </a>
        <nav class="header__nav">
            <ul class="nav__list">
                @if(Auth::check() && Auth::user()->isAdmin())
                    <li class="nav__item {{ Route::currentRouteNamed('orders') ? 'active' : '' }}">
                        <a href="{{ route('orders') }}">
                            Orders
                        </a>
                    </li>
                    <li class="nav__item {{ Route::currentRouteNamed('categories.index') ? 'active' : '' }}">
                        <a href="{{ route('categories.index') }}">
                            Categories
                        </a>
                    </li>
                    <li class="nav__item {{ Route::currentRouteNamed('products.index') ? 'active' : '' }}">
                        <a href="{{ route('products.index') }}">
                            Products
                        </a>
                    </li>
                @endif

                <li class="nav__item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>
