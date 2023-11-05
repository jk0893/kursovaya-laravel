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
                            <form class="create-form-form" action="{{ route('order.update', $order->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <nav class="create-form-nav">

                                    <label class="modal-inputs" for="name">Фамилия:</label>
                                    <input type="text" name="name" pattern="\w{3,30}" value="{{ $order->last_name }}">

                                    <label class="modal-inputs" for="count">Имя:</label>
                                    <input type="number" name="count" pattern="\w{3,30}" value="{{ $order->first_name }}"> 

                                    <label class="modal-inputs" for="price">Отчество:</label>
                                    <input type="number" name="price" pattern="\w" value="{{ $order->father_name }}">

                                    <label class="modal-inputs" for="image">Дата рождения:</label>
                                    <input type="date" name="image" value="{{ $order->birth_date }}">

                                    <label for="category_id">Паспорт</label>
                                    <input type="text" name="image" value="{{ $order->passport }}">

                                    <label for="category_id">Номер телефона</label>
                                    <input type="tel" pattern="[0-9]{10}" name="image" value="+7{{ $order->phone }}">

                                    <label for="category_id">Адрес</label>
                                    <input type="file" name="image" value="{{ $order->address }}">

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
