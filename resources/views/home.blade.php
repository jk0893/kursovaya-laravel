@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="user-info">
                    <div class="card">
                        <div class="user">
                            <img class="avatar-icon-lk" src="../../images/avatar-placeholder.png">
                            <h1>{{ Auth::user()->name }}<h1>
                        </div>
                        {{-- @if (!Auth::user()->client_id)
                            <div style="text-align: center; margin-top: 5rem;">
                                <h1>Личные данные: </h1>
                            </div>
                            <form method="POST" action="{{ route('client.storeAuthed', ['client_id'=>Auth::user()->client_id]) }}" class="subtext">
                                @csrf
                                <input type="hidden" name="client_id">
                                <div class="info">
                                    <div class="info-left-side">
                                        <p>Фамилия:</p>
                                        <p>Имя:</p>
                                        <p>Отчество:</p>
                                        <p>Дата рождения:</p>
                                        <p>Номер телефона:</p>
                                    </div>
                                    <div class="info-right-side">

                                        <input name="last_name"
                                            class="form-control @error('last_name') is-invalid @enderror" type="text"
                                            name="last-name" required min="5" max="25" placeholder="Введите фамилию">

                                        @error('last_name')
                                            <span class="invalid-feedback subtext" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input name="first-name"
                                            class="form-control @error('first_name') is-invalid @enderror" type="text"
                                            required min="5" max="25" placeholder="Введите имя">

                                        @error('first-name')
                                            <span class="invalid-feedback subtext" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input name="father-name"
                                            class="form-control @error('father_name') is-invalid @enderror" type="text"
                                            min="5" max="30" placeholder="Введите отчество">

                                        @error('father-name')
                                            <span class="invalid-feedback subtext" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input name="birth-date"
                                            class="form-control @error('birth-date') is-invalid @enderror" type="date"
                                            min="<?php echo date('Y-m-d H:i:s', strtotime('-3 day')); ?>" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" required>

                                        @error('birth-date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input name="phone-number"
                                            class="form-control @error('phone-number') is-invalid @enderror" type="text"
                                            required min="11" max="12" placeholder="Введите номер телефона">

                                        @error('phone-number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div style="text-align: center">
                                    <input class="button" type="submit" value="Сохранить">
                                </div>
                            </form>
                        @else --}}
                        <div class="info subtext">
                            <div class="info-left-side">
                                @if (Auth::user()->role_id === 1)
                                    <p>Права пользователя:</p>
                                @endif
                                <p>Адрес почты:</p>
                                <p>отчество:</p>
                                <p>дата рождения:</p>
                                <p>номер телефона:</p>
                            </div>
                            <div class="info-right-side">
                                @if (Auth::user()->role_id === 1)
                                    <p>{{ Auth::user()->role->name }}</p>
                                @endif
                                <p>{{ Auth::user()->email }}</p>
                                <p>father-name</p>
                                <p>birth-date</p>
                                <p>phone-number</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->role_id === 1)
                    <div class="buttons">
                        <a href="{{ route('admin.user.index') }}" class="button">Пользователи</a>
                        <a href="{{ route('admin.product.index') }}" class="button">Товары</a>
                        <a href="{{ route('admin.employee.index') }}" class="button">Сотрудники</a>
                        <a href="{{ route('admin.client.index') }}" class="button">Клиенты</a>
                        <a href="{{ route('order.index') }}" class="button">Заказы</a>

                    </div>
                @endif
                @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
                    <div class="buttons">
                        <a href="{{ route('order.index') }}" class="button">Заказы</a>
                    </div>
                @endif
            </nav>
        </section>
    </body>
@endsection
