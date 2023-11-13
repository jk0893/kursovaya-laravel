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
                            <form class="card-authreg-form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <nav class="card-authreg-nav">
                                    <label class="modal-inputs" for="username">Логин:</label>
                                    <input class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" type="text" name="username" id="username" required
                                        min="5" max="30"
                                        title="Логин должен содержать латинские буквы, цифры и символы, их дожно быть не менее 5 символов и не более 30-ти.">
                                    @error('username')
                                        <span class="invalid-feedback subtext" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label class="modal-inputs" for="password">Пароль:</label>
                                    <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" type="text" name="password" id="password" required
                                        min="5" max="30"
                                        title="Пароль должен содержать латинские буквы, цифры и символы, их дожно быть не менее 5 символов и не более 30-ти.">
                                    @error('password')
                                        <span class="invalid-feedback subtext" role="alert">
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
