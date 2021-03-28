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

                {{--Auth--}}
                @guest
                    @if (Route::has('login'))
                        <li class="nav__item">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav__item">
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav__item">
                        <a href="{{ route('orders') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
                {{--End Auth--}}

            </ul>
        </nav>
    </div>
</div>
