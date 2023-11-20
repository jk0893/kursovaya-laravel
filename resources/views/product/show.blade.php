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
                        {{ $product->category->name}}
                    </div>
                    <div class="buttons">
                        <a class="button" href="{{ route('admin.product.edit', $product->id) }}">Изменить</a>

                        <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
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