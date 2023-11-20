@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <h1>Kaтeгopии товаров</h1>
                <div class="product-categories">
                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="gpu">
                            <p class="subtext-cards">Видеокарты</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="mb">
                            <p class="subtext-cards">Материнские платы</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="cpu">
                            <p class="subtext-cards">Процессоры</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="ram">
                            <p class="subtext-cards">Оперативная память</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="psu">
                            <p class="subtext-cards">Блоки питания</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="ssd">
                            <p class="subtext-cards">Накопители</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="cool">
                            <p class="subtext-cards">Охлаждение</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="case">
                            <p class="subtext-cards">Корпусы</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="monitor">
                            <p class="subtext-cards">Мониторы</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="kb">
                            <p class="subtext-cards">Клавиатуры</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="mouse">
                            <p class="subtext-cards">Мыши</p>
                        </div>
                    </a>

                    <a class="carto4ka" href="{{ route('catalogue.index') }}">
                        <div class="premades">
                            <p class="subtext-cards">Готовые сборки</p>
                        </div>
                    </a>
                </div>
            </nav>
        </section>
    </body>

@endsection