@extends('layouts.header')
@section('main-content')

<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('user.create') }}">Добавить пользователя</a>
            </div>
            <div class="product-categories">
                @foreach ($users as $user)
                <a href="{{ route('user.show', $user->id) }}" style="background: src('{{ asset($user->user_avatar) }}')"
                    class="carto4ka-CRUD">
                    <div class="image">
                        <p>{{ $user->username }}</p>
                    </div>
                </a>
                @endforeach
        </nav>
        <div class="pagination-container">
            <div>
                {{ $users->links() }}
            </div>
        </div>
    </section>

</body>
@endsection