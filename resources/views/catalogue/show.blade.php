@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="buttons">
                    <a href=" {{ route('catalogue.index') }} " class="button">Вернуться</a>
                </div>
                <div class="catalogue-container">
                    <section class="catalogue-info">
                        <div class="separate-ver">
                            <section class="catalogue-info-header separate-hor">
                                <img src="{{ asset('images/gpu-placeholder.webp') }}" alt="product placeholder" width="350">
                                <h1>{{ $product->name }}</h1>
                            </section>

                            <section class="catalogue-info-text">
                                <article>
                                    <p>{{ $product->description }}</p>
                                </article>
                            </section>

                            {{-- <a href="{{route('bin.store')}}" style="" class="button">Заказать</a> --}}
                        </div>
                    </section>
                </div>
            </nav>
        </section>
    </body>

@endsection
