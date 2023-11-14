@extends('layouts.header')
@section('main-content')
<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('admin.employee.index') }}">Вернуться</a>
            </div>
            <div class="user-info" >
                <div class="card">
                    <div class="user">
                        <img class="avatar-icon-lk" src="{{ asset($employee->avatar) }}">
                    </div>
                    <div class="info subtext">
                        <div class="info-left-side">
                            <p>фамилия:</p>
                            <p>имя:</p>
                            <p>отчество:</p>
                            <p>дата рождения:</p>
                            <p>номер телефона:</p>
                        </div>
                        <div class="info-right-side">
                            <p>{{ $employee->last_name }}</p>
                            <p>{{ $employee->first_name }}</p>
                            <p>{{ $employee->father_name }}</p>
                            <p>{{ $employee->birth_date }}</p>
                            <p>{{ $employee->phone }}</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="button" href="{{ route('admin.employee.edit', $employee->id) }}">Изменить</a>

                        <form action="{{ route('admin.employee.delete', $employee->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="button" type="submit" value="Удалить">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</body>
@endsection