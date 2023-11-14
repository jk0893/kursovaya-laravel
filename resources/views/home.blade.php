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
                        <div class="info subtext">
                            <div class="info-left-side">
                                @if (Auth::user()->role_id === 1)
                                    <p>Права пользователя:</p>
                                @endif
                                <p>фамилия:</p>
                                <p>отчество:</p>
                                <p>дата рождения:</p>
                                <p>номер телефона:</p>
                            </div>
                            <div class="info-right-side">
                                @if (Auth::user()->role_id === 1)
                                    <p>{{ Auth::user()->role->name }}</p>
                                @endif
                                <p>last-name</p>
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
                        <a href="{{ route('product.index') }}" class="button">Товары</a>
                        <a href="{{ route('admin.employee.index') }}" class="button">Сотрудники</a>
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
