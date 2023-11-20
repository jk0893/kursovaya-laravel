@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="catalogue-sections">
                    <section class="catalogue-filters">
                        <form action={{ route('catalogue.index') }} method="GET"
                            class="search-bar">
                            <input type="search" name="name" id="name" placeholder="Поиск">
                            <input class="button" style="scale: 0.6" type="submit" value="Найти">
                        </form>
                        <div class="filters">
                            <div class="filter-items">
                                <form action="{{ route('catalogue.index') }}" method="GET" class="filter-options">
                                    <div class="categories">
                                        <label for="categories">Категории товаров:</label>
                                        <select name="category_id" id="categories" style="margin-top: 1rem;">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="price">
                                        <label for="price">Цена:</label>
                                        <input type="number" name="price" value="1000" id="price"
                                            placeholder="Введите значение" min="100" max="300000" style="margin-top: 1rem">
                                    </div>
                                    <button type="submit" class="button" style="scale: 0.7">Фильтровать</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="catalogue-products">
                        <div class="catalogue-container">
                            @foreach ($catalogues as $catalogue)
                                <div class="catalogue-items">
                                    <a href="{{ route('catalogue.show', $catalogue->id) }}">
                                        <div class="catalogue-item-container separate">
                                            <img src={{ asset('images/') }}{{ '/' . $catalogue->category->shorts }}{{ '-placeholder.webp' }}
                                                width="150">
                                            <h2>
                                                {{ $catalogue->name }}
                                            </h2>
                                            <article>
                                                {{ $catalogue->description }}
                                            </article>
                                            <p>{{ $catalogue->price }}</p>
                                            {{-- <a href="{{ route('bin.store') }}"> --}}
                                                @csrf
                                                <img src="{{ asset('/images/icons/bin-icon.png') }}" width="100"
                                                    alt="bin icon">
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-container">
                            <div class="pagination-object down">
                                {{ $catalogues->withQueryString()->links() }}
                            </div>
                        </div>
                    </section>
                </div>
            </nav>
        </section>
    </body>
@endsection
