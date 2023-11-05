@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <div class="user-info">
                <div class="create-form-content">
                    <div class="create-form-section">

                        <div class="create-form-header">
                            <h1 class="create-form-title">Изменение товара</h1>
                        </div>

                        <div class="create-form-body">
                            <form class="create-form-form" action="{{ route('product.update', $product->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <nav class="create-form-nav">

                                    <label class="modal-inputs" for="name">Название:</label>
                                    <input type="text" name="name" pattern="\w{3,30}" value="{{ $product->name }}">

                                    <label class="modal-inputs" for="count">Кол-во:</label>
                                    <input type="number" name="count" pattern="\w{3,30}" value="{{ $product->count }}"> 

                                    <label class="modal-inputs" for="price">Стоимость:</label>
                                    <input type="number" name="price" pattern="\w" value="{{ $product->price }}">

                                    <label class="modal-inputs" for="image">Изображение:</label>
                                    <input type="file" name="image" value="{{ $product->image }}">

                                    <label for="category_id">Категория товара</label>
                                    <select name="category" id="category-select">
                                        @foreach($categories as $category)
                                        <option
                                        
                                        {{ $category->id === $product->category_id ? 'selected' : '' }}

                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    <button type="submit">Сохранить</button>
                                </nav>
                            </form>
                        </div>

                        <div class="create-form-footer">
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
