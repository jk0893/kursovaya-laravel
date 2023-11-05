@extends('layouts.header')
@section('main-content')

<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('order.create') }}">Добавить товар</a>
            </div>
            <div class="product-categories">
                @foreach ($orders as $order)
                <a href="{{ route('order.show', $order->id) }}" class="carto4ka-CRUD">
                    <div class="image">
                        <p>Заказ №{{ $order->id }}</p> 
                    </div>
                </a>
                @endforeach
            </div>
        </nav>
        <div class="pagination-container">
            <div class="pagination-object">
                {{ $orders->links() }}
            </div>
        </div>
    </section>
</body>
@endsection