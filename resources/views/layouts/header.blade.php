<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>chopik.ru | Интернет-магазин компьютерной техники</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}">
</head>

<header class="header">
    <div class="header-left-side">
        <div>
            <a class="logo-mp" href="{{ route('main.index') }}">
                <img class="logo-icon-header" src="../../images/icons/logo-icon.png">
                <h1 class="logo-text-header">chopik.ru</h1>
            </a>
        </div>
    </div>

    <div class="header-right-side">
        <div class="bin-header">
            <a href="{{ route('bin.index') }}">
                <img class="bin-icon-header" src="{{ asset('/images/icons/bin-icon.png') }}">
                <div class="subtext">Kopзинa</div>
            </a>
        </div>
        <div class="avatar-header">
            @if (Auth::check())
                <a href="#openModalAuth">
                    <img class="avatar-icon-header" src="{{ asset('/images/icons/avatar-icon.png') }}">
                    <p class="subtext">{{ Auth::user()->name }}</p>
                </a>
            @else
                <a href="#openModal">
                    <img class="avatar-icon-header" src="{{ asset('/images/icons/avatar-icon.png') }}">
                    <p class="subtext">Войти</p>
                </a>
            @endif
        </div>
    </div>
</header>

<!-- Модальное окно -->
<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Вход в аккаунт</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                @if (Route::has('login'))
                    <form method="POST" action="{{ route('login') }}" class="modal-form" enctype="multipart/form-data">
                        @csrf
                        <nav class="modal-nav">
                            <div class="modal-inputs">
                                <label for="email">Адрес почты:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-inputs">
                                <label for="password">Пароль:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit">Войти</button>
                        </nav>
                    </form>
                @endif
            </div>
            @if (Route::has('register'))
                <div class="modal-footer">
                    <a href="{{ route('register') }}">Нет аккаунта?</a>
                </div>
            @endif
        </div>
    </div>
</div>

@if (Auth::check())
    <div id="openModalAuth" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">{{ Auth::user()->name }}</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    @if (Route::has('login'))
                        <form class="modal-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <nav class="modal-nav" style="margin-top: 1rem; gap: 1rem;">

                                <a class="button"
                                    style="display:flex;flex-flow: row nowrap; justify-content: center; align-items: center; gap: 1rem"
                                    href="{{ route('home') }}">
                                    <img src="{{ asset('images/icons/house-solid.svg') }}" width="20px"
                                        style="filter: invert(43%) sepia(27%) saturate(3380%) hue-rotate(22deg) brightness(93%) contrast(101%);">
                                    Личный кабинет</a>
                                <button class="button" type="submit">Выйти</button>

                            </nav>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif

@yield('main-content')

<footer class="footer">
    <p>Сайт разработан студентом группы ИС-20-1 Мамонцевым Александром в учебных целях и не является коммерческим
        проектом.
    <p>
</footer>

</html>
