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

                                    <label class="modal-inputs" for="name">Адрес:</label>
                                    <input type="text" name="address" pattern="\w{3,30}" value="{{ $order->address }}">

                                    <select class="modal-inputs" for="count">Клиент:
                                        @foreach ($clients as $client)
                                            <option type="number" name="client_id"
                                                value="{{ $order->client_id }}">{{$order->client->last_name}}</option>
                                        @endforeach
                                    </select>

                                    <label class="modal-inputs" for="price">Отчество:</label>
                                    <input type="number" name="price" pattern="\w" value="{{ $order->father_name }}">

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
