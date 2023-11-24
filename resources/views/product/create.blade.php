@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <div class="user-info">
                <div class="create-form-content">
                    <div class="create-form-section">

                        <div class="create-form-header">
                            <h1 class="create-form-title">Добавление товара</h1>
                        </div>

                        <div class="create-form-body">
                            <form class="create-form-form" action="{{ route('admin.product.store') }}" method="POST">
                                @csrf
                                <nav class="create-form-nav">
                                    <label class="modal-inputs" for="name">Название</label>
                                    <input type="text" name="name">

                                    <label class="modal-inputs" for="count">Кол-во</label>
                                    <input type="number" name="count" value="1">

                                    <label class="modal-inputs" for="avatar">Стоимость</label>
                                    <input type="number" name="price" value="1000">

                                    <label class="modal-inputs" for="image">Изображение:</label>
                                    <input type="file" name="image">

                                    <label for="category_id">Категория товара</label>
                                    <select name="category_id" id="category-select">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    <button type="submit">Создать</button>
                                </nav>
                            </form>
                        </div>

                        <div class="create-form-footer"></div>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
