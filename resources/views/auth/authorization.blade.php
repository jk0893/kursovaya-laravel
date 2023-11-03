@extends('layouts.header')
@section('main-content')
<body>
    <section class="main-content">
        <div class="user-info">
            <div class="card-authreg-content">
                <div class="card-authreg-section">

                    <div class="card-authreg-header">
                        <h1 class="card-authreg-title">Вход в аккаунт</h1>
                    </div>

                    <div class="card-authreg-body">
                        <form class="card-authreg-form" action="/lk-index.php" method="POST">
                            <nav class="card-authreg-nav">
                                <label class="modal-inputs" for="username">Логин:</label>
                                <input type="text" name="username" id="username" required pattern="\w" min="5" max="30"
                                    oninput="setCustomValidity('Логин должен содержать латинские буквы, цифры и символы, их дожно быть не менее 5 символов и не более 30-ти.')">

                                <label class="modal-inputs" for="password">Пароль:</label>
                                <input type="text" name="password" id="password" required pattern="\w" min="5" max="30"
                                    oninput="setCustomValidity('Пароль должен содержать латинские буквы, цифры и символы, их дожно быть не менее 5 символов и не более 30-ти.')">

                                <button class="subtext button" type="submit">Войти</button>
                            </nav>
                        </form>
                    </div>

                    <div class="card-authreg-footer">
                        <a href="{{ route('auth.registration')}}">Нет аккаунта?</a>
                    </div>

                </div>
            </div>
        </div>
        </nav>
    </section>
</body>
@endsection