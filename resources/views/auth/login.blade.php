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
                            <form method="POST" action="{{ route('login') }}" class="card-authreg-form"
                                enctype="multipart/form-data">
                                @csrf

                                <nav class="card-authreg-nav">
                                    <label class="modal-inputs" for="email">Адрес почты:</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="password">Пароль:</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <button class="subtext button" type="submit">Войти</button>
                                </nav>
                            </form>
                        </div>

                        <div class="card-authreg-footer">
                            <a href="{{ route('register') }}">Нет аккаунта?</a>
                        </div>

                    </div>
                </div>
            </div>
            </nav>
        </section>
    </body>
@endsection
