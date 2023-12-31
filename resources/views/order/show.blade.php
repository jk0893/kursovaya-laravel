@extends('layouts.header')
@section('main-content')
<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('order.index') }}">Вернуться</a>
            </div>
            <div class="user-info" >
                <div class="card">
                    <div class="user">
                        <img class="avatar-icon-lk" src="{{ asset($order->image) }}">
                        <h1>{{ $order->name }}</h1>
                    </div>
                    <div class="info subtext">
                        <div class="info-left-side">
                            <p>имя:</p>
                            <p>фамилия:</p>
                            <p>отчество:</p>
                            <p>дата рождения:</p>
                            <p>номер телефона:</p>
                        </div>
                        <div class="info-right-side">
                            <p>first-name</p>
                            <p>last-name</p>
                            <p>father-name</p>
                            <p>birth-date</p>
                            <p>phone-number</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="button" href="{{ route('order.edit', $order->id) }}">Изменить</a>

                        <form action="{{ route('order.delete', $order->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="button" type="submit" value="Удалить">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</body>
@endsection