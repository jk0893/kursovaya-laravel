@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="catalogue-sections">
                    <section class="filters">
                        <div class="search-bar">
                            <input type="search" name="name" id="name" placeholder="Поиск">
                        </div>
                        <div class="filter-items">
                            <div class="filter-options">
                                <div class="categories">
                                    <label for="categories">Категории товаров:</label>
                                    <select name="category_id" id="categories">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="cost">
                                    <label for="cost">Цена:
                                        <input type="number" value="1000" id="cost" placeholder="Введите сумму" min="100" max="300000">
                                    </label>
                                </div>


                            </div>
                        </div>
                    </section>
                    <section class="catalogue">
                        <div class="catalogue-container">
                            @foreach ($catalogues as $catalogue)
                                <div class="catalogue-items">
                                    <a href="{{ route('catalogue.show', $catalogue->id) }}">
                                        <div class="catalogue-item-container separate">
                                            <img src={{ asset('images/gpu-placeholder.webp') }} width="150">
                                            <h2>
                                                {{ $catalogue->name }}
                                            </h2>
                                            <article>
                                                {{ $catalogue->description }}
                                            </article>
                                            <a href="{{ route('bin.store') }}">
                                                <img src="{{ asset('/images/icons/bin-icon.png') }}" width="100"
                                                    alt="bin icon">
                                            </a>
                                        </div>
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
