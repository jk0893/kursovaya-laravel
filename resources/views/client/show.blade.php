@extends('layouts.header')
@section('main-content')
<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('client.index') }}">Вернуться</a>
            </div>
            <div class="user-info" >
                <div class="card">
                    <div class="user">
                        <img class="avatar-icon-lk" src="{{ asset($client->avatar) }}">
                    </div>
                    <div class="info subtext">
                        <div class="info-left-side">
                            <p>фамилия:</p>
                            <p>имя:</p>
                            <p>отчество:</p>
                            <p>дата рождения:</p>
                            <p>номер телефона:</p>
                            <p>серия и номер паспорта:</p>
                        </div>
                        <div class="info-right-side">
                            <p>{{ $client->last_name }}</p>
                            <p>{{ $client->first_name }}</p>
                            <p>{{ $client->father_name }}</p>
                            <p>{{ $client->birth_date }}</p>
                            <p>{{ $client->phone }}</p>
                            <p>{{ $client->passport }}</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="button" href="{{ route('client.edit', $client->id) }}">Изменить</a>

                        <form action="{{ route('client.delete', $client->id) }}" method="post">
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