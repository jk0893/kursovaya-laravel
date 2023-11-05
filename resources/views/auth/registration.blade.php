@extends('layouts.header')
@section('main-content')

<body>
    <section class="main-content">
        <div class="user-info">
            <div class="card-authreg-content">
                <div class="card-authreg-section">

                    <div class="card-authreg-header">
                        <h1 class="card-authreg-title">Регистрация</h1>
                    </div>

                    <div class="card-authreg-body">
                        <form class="card-authreg-form" action="{{ route('auth.registrate') }}" method="POST">
                            <nav class="card-authreg-nav">
                                <label class="modal-inputs" for="second-name">Фамилия:</label>
                                <input type="text" name="second-name" required pattern="[A-Za-zА-Яа-яЁё]" min="5"
                                    max="25">

                                <label class="modal-inputs" for="first-name">Имя:</label>
                                <input type="text" name="first-name" required pattern="[A-Za-zА-Яа-яЁё]" min="5"
                                    max="25">

                                <label class="modal-inputs" for="father-name">Отчество:</label>
                                <input type="text" name="father-name" pattern="[A-Za-zА-Яа-яЁё]" min="5" max="30">

                                <label class="modal-inputs" for="username">Логин:</label>
                                <input type="text" name="username" pattern="\w" required min="5">
                                <!-- \w соответствует любой латинской букве, цифре и знаку препинания -->

                                <label class="modal-inputs" for="password">Пароль:</label>
                                <input type="password" name="password" pattern="\w" required min="5">

                                <label class="modal-inputs" for="password-confirm">Подтверждение пароля:</label>
                                <input type="password" name="password-confirm" pattern="\w" required min="5">

                                <label class="modal-inputs" for="birth-date">Дата рождения:</label>
                                <input type="date" min="<?php echo date('Y-m-d H:i:s', strtotime("-3 day")); ?>"
                                    max="<?php echo date('Y-m-d'); ?>" required>

                                <label class="modal-inputs" for="phone-number">Номер телефона:</label>
                                <input type="text" required
                                    pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                    min="11" max="12">
                                <button type="submit">Зарегистрироваться</button>
                            </nav>
                        </form>
                    </div>

                    <div class="card-authreg-footer">
                        <a href="{{ route('auth.authorization') }}">Уже есть аккант?</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

@endsection