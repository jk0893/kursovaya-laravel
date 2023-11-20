@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <h1>Kaтeгopии товаров</h1>
                <div class="product-categories">
                    @foreach($categories as $category)
                    <a class="carto4ka" href="{{ route('catalogue.index', ['category_id' => $category->id]) }}">
                        <div class="{{$category->shorts}}" style='background-image: url("../../images/{{$category->shorts}}-placeholder.webp");'>
                            <p class="subtext-cards">{{$category->name}}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </nav>
        </section>
    </body>

@endsection