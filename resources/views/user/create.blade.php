@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <div class="user-info">
                <div class="create-form-content">
                    <div class="create-form-section">

                        <div class="create-form-header">
                            <h1 class="create-form-title">Создание пользователя</h1>
                        </div>

                        <div class="create-form-body">
                            <form class="create-form-form" action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <nav class="create-form-nav">
                                    <label class="modal-inputs" for="username">Логин:</label>
                                    <input type="text" name="username" pattern="\w" required min="5">

                                    <label class="modal-inputs" for="password">Пароль:</label>
                                    <input type="password" name="password" pattern="\w" required min="5">

                                    <label class="modal-inputs" for="avatar">Аватарка:</label>
                                    <input type="file" name="avatar" pattern="\w" required min="5">
                                </nav>
                            </form>
                        </div>

                        <div class="create-form-footer">
                            <button type="submit">Создать</button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
