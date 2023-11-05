<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="#openModal">
                <img class="avatar-icon-header" src="{{ asset('/images/icons/avatar-icon.png') }}">
                <p class="subtext">Войти</p>
            </a>
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
                <form class="modal-form" action="{{ route('auth.authorization') }}">
                    <nav class="modal-nav">
                        <div class="modal-inputs">
                            <label for="username">Логин:</label>
                            <input type="text" name="username" id="username" required pattern="/^[Aa-Zz\d]+$/i" min="5" max="30"
                                oninput="setCustomValidity('Логин должен содержать латинские буквы, цифры и/или символы, их дожно быть не менее 5 символов и не более 30-ти.')">
                        </div>
                        <div class="modal-inputs">
                            <label for="password">Пароль:</label>
                            <input type="text" name="password" id="password" required pattern="/^[Aa-Zz\d]+$/i" min="5" max="30"
                                oninput="setCustomValidity('Логин должен содержать латинские буквы, цифры и/или символы, их дожно быть не менее 5 символов и не более 30-ти.')">
                        </div>
                        <button type="submit">Войти</button>
                    </nav>
                </form>
            </div>
            <div class="modal-footer">
                <a href="{{route('auth.registration')}}">Нет аккаунта?</a>
            </div>
        </div>
    </div>
</div>

@yield('main-content')

<footer class="footer"><p>Сайт разработан студентом группы ИС-20-1 Мамонцевым Александром в учебных целях и не является коммерческим проектом.<p></footer>
</html>