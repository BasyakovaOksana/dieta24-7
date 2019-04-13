<header>
    <div class="container">
        <h1 id="title">
            название сайта
        </h1>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                @else
                    <a href="{{ route('login') }}">Войти</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Регистрация</a>
                    @endif
                @endauth

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        @endif
    </div>

    {{--<form action="{{ route('search') }}" method="post">--}}
    {{--{{ csrf_field() }}--}}
    {{--<input type="search" name="search" placeholder="поиск" class="search">--}}
    {{--<label for="search"></label>--}}
    {{--</form>--}}

    <nav>
        <ul class="navigation" id="navigation">
            <li><a href="{{ route('main_page') }}">ГЛАВНАЯ</a></li>

            <li>ДИЕТА ПРИ ЗАБОЛЕВАНИЯХ
                <ul class="list">
                    @foreach($food_at_diseases as $item)
                        <li><a href="{{ route('index.food_at_diseases', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </li>

            <li>ПИТАТЕЛЬНЫЕ ВЕЩЕСТВА
                <ul class="list">
                    @foreach($nutrients as $item)
                        <li><a href="{{ route('index.nutrients', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </li>

            <li><a href="{{ route('index.contacts') }}">КОММЕНТАРИИ</a></li>
        </ul>
    </nav>
</header>