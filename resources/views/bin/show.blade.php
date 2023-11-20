@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content" style="display: flex; justify-content: center; align-items: center">
            <nav class="main-content-nav">
                <div class="bin-container">
                    <div class="bin">
                        <div class="bin-header">
                            <img class="bin-icon" src="{{ asset('images/icons/bin-icon.png') }}" width="100">
                            <h1 class="logo-text-header">Заказ №{{$order->id}}</h1>
                        </div>
                        <section class="bin-content">
                            @foreach ($orders as $order)
                            <div class="bin-item">
                                <div class="bin-info">
                                    <p>Заказ: {{$order->id}}</p>
                                    <article>
                                        {{$order->address}}
                                    </article>
                                </div>
                                <div>
                                    <a href="{{ route('bin.show', $order->id) }}" class="button">Детали заказа</a>
                                </div>
                            </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </nav>
        </section>
    </body>
@endsection
