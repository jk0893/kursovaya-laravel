@extends('layouts.header')
@section('main-content')
<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('admin.product.index') }}">Вернуться</a>
            </div>
            <div class="user-info" >
                <div class="card">
                    <div class="user">
                        <img class="avatar-icon-lk" src="{{ asset($product->image) }}">
                        <h1>{{ $product->name }}</h1>
                    </div>
                    <div class="info subtext">
                        <article>
                            {{ $product->description }}
                        </article>
                    </div>
                    <div>
                        <div>
                            Категория: {{ $product->category->name}}
                        </div>
                        <div>
                            Кол-во: {{ $product->count}}
                        </div>
                    </div>
                    <div class="buttons down">
                        <a class="button" href="{{ route('admin.product.edit', $product->id) }}">Изменить</a>
                        <a class="button" href="{{ route('admin.product.delete', $product->id) }}">Удалить</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</body>
@endsection