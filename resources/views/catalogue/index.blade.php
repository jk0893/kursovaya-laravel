@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="catalogue-sections">
                    <section class="filters">
                        <input type="search" name="name" id="name" placeholder="Поиск">
                        <div class="filter-items">

                        </div>
                    </section>
                    <section class="catalogue">
                        <div class="catalogue-container">
                            @foreach ($catalogues as $catalogue)
                                <div class="catalogue-items">
                                    <a href="{{ route('catalogue.show', $catalogue->id) }}">
                                        <img src={{asset('images/gpu-placeholder.webp')}} width="70px">
                                        <p>{{ $catalogue->name }}</p>
                                        <article>

                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="pagination-container">
                    <div class="pagination-object">
                        {{ $catalogues->withQueryString()->links() }}
                    </div>
                </div>
            </nav>
        </section>
    </body>
@endsection
