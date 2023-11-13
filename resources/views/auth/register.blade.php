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
                            <form class="card-authreg-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <nav class="card-authreg-nav">
                                    <label class="modal-inputs" for="last-name">Фамилия:</label>
                                    <input name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                                        type="text" name="last-name" required min="5" max="25">

                                    @error('last_name')
                                        <span class="invalid-feedback subtext" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="first-name">Имя:</label>
                                    <input name="first-name" class="form-control @error('first_name') is-invalid @enderror"
                                        type="text" name="first-name" required min="5" max="25">

                                    @error('first-name')
                                        <span class="invalid-feedback subtext" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="father-name">Отчество:</label>
                                    <input name="father-name"
                                        class="form-control @error('father_name') is-invalid @enderror" type="text"
                                        name="father-name" min="5" max="30">

                                    @error('father-name')
                                        <span class="invalid-feedback subtext" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="username">Логин:</label>
                                    <input name="username" class="form-control @error('username') is-invalid @enderror"
                                        type="text" name="username" required min="5">
                                    <!-- \w соответствует любой латинской букве, цифре и знаку препинания -->

                                    @error('username')
                                        <span class="invalid-feedback subtext" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="password">Пароль:</label>
                                    <input name="password" class="form-control @error('password') is-invalid @enderror"
                                        type="password" name="password" required min="5">

                                    @error('password')
                                        <span class="invalid-feedback subtext" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    {{-- <label class="modal-inputs" for="password-confirm">Подтверждение пароля:</label>
                                    <input name="password-confirm"
                                        class="form-control @error('password-confirm') is-invalid @enderror" type="password"
                                        name="password-confirm" required min="5">

                                    @error('password-confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}

                                    <label class="modal-inputs" for="birth-date">Дата рождения:</label>
                                    <input name="birth-date" class="form-control @error('birth-date') is-invalid @enderror"
                                        type="date" min="<?php echo date('Y-m-d H:i:s', strtotime('-3 day')); ?>" max="<?php echo date('Y-m-d'); ?>" required>

                                    @error('birth-date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="phone-number">Номер телефона:</label>
                                    <input name="phone-number"
                                        class="form-control @error('phone-number') is-invalid @enderror" type="text"
                                        required
                                        min="11" max="12">

                                    @error('phone-number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <button type="submit">Зарегистрироваться</button>
                                </nav>
                            </form>
                        </div>

                        <div class="card-authreg-footer">
                            <a href="{{ route('login') }}">Уже есть аккант?</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
