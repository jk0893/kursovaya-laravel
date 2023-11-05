@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <div class="user-info">
                <div class="create-form-content">
                    <div class="create-form-section">

                        <div class="create-form-header">
                            <h1 class="create-form-title">Добавление сотрудника</h1>
                        </div>

                        <div class="create-form-body">
                            <form class="create-form-form" action="{{ route('employee.store') }}" method="POST">
                                @csrf
                                <nav class="create-form-nav">
                                    <label class="modal-inputs" for="last_name">Фамилия</label>
                                    <input type="text" name="last_name" pattern="\w{3,30}">

                                    <label class="modal-inputs" for="first_name">Имя</label>
                                    <input type="text" name="first_name" pattern="\w{3,30}">

                                    <label class="modal-inputs" for="father_name">Отчество</label>
                                    <input type="text" name="father_name" pattern="\w{3,30}">

                                    <label class="modal-inputs" for="birth_date">Дата рождения</label>
                                    <input type="date" name="birth_date">

                                    <label class="modal-inputs" for="passport">Паспорт:</label>
                                    <input type="text" name="passport" pattern="\d{10,10}" title="Введите 10 цифр без пробелов">

                                    <label class="modal-inputs" for="phone">Номер телефона:</label>
                                    <input type="text" name="phone" value="+7" title="Введите номер телефона в виде +71234567890 или 81234567890" pattern="[[\+][7],8]{1}d{10}" maxlength="12">

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
