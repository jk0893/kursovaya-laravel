@extends('layouts.header')
@section('main-content')

<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('admin.product.create') }}">Добавить товар</a>
            </div>
            <div class="product-categories">
                @foreach ($products as $product)
                <a href="{{ route('admin.product.show', $product->id) }}" class="carto4ka-CRUD">
                    <div class="image">
                        <p>{{ $product->name }}</p> 
                    </div>
                </a>
                @endforeach
            </div>
        </nav>
        <div class="pagination-container">
            <div class="pagination-object">
                {{ $products->withQueryString()->links() }}
            </div>
        </div>
    </section>
</body>
@endsection