@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="buttons">
                    <a class="button" href="{{ route('admin.user.index') }}">Вернуться</a>
                </div>
                <div class="user-info">
                    <div class="create-form-content">
                        <div class="create-form-section">

                            <div class="create-form-header">
                                <h1 class="create-form-title">Изменение пользователя</h1>
                            </div>

                            <div class="create-form-body">
                                <form class="create-form-form" action="{{ route('admin.user.update', $user->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('patch')
                                    <nav class="create-form-nav">
                                        <label class="modal-inputs" for="username">Логин:</label>
                                        <input type="text" name="username" value="{{ $user->name }}">

                                        <label class="modal-inputs" for="password">Пароль:</label>
                                        <input type="password" name="password" value="{{ $user->password }}">

                                        <label class="modal-inputs" for="user_avatar">Аватарка:</label>
                                        <input type="file" name="user_avatar" value="{{ $user->user_avatar }}">

                                        <label class="modal-inputs" for="role_id">Права доступа:</label>
                                        <select name="role_id" id="role-select">
                                            @foreach ($roles as $role)
                                                <option {{ $role->id === $user->role_id ? 'selected' : '' }}
                                                    value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>

                                        <button type="submit">Обновить</button>
                                    </nav>
                                </form>
                            </div>

                            <div class="create-form-footer"></div>

                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </body>
@endsection
