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
                            <form class="card-authreg-form" action="{{ route('register') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <nav class="card-authreg-nav">
                                    <label class="modal-inputs" for="name">Логин:</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="email">Адрес почты:</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="password">Пароль:</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="password-confirm">Подтверждение пароля:</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

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
