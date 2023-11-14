@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <div class="user-info">
                <div class="create-form-content">
                    <div class="create-form-section">

                        <div class="create-form-header">
                            <h1 class="create-form-title">Добавление пользователя</h1>
                        </div>

                        <div class="create-form-body">
                            <form class="create-form-form" action="{{ route('admin.user.store') }}" method="POST">
                                @csrf
                                <nav class="create-form-nav">
                                    <label class="modal-inputs" for="username">Логин:</label>
                                    <input type="text" name="username" pattern="\w{3,30}">

                                    <label class="modal-inputs" for="password">Пароль:</label>
                                    <input type="password" name="password" pattern="\w{3,30}">

                                    <label class="modal-inputs" for="avatar">Аватарка:</label>
                                    <input type="file" name="user_avatar" pattern="\w">

                                    <label class="modal-inputs" for="role_id">Права доступа:</label>
                                    <select name="role_id" id="role-select">
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
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
