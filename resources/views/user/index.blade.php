@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="product-categories">
                    @foreach ($users as $user)
                    <a href="{{ route('user.show', $user->id) }}" class="carto4ka-users">
                        <div>
                            <p>{{ $user->username }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </nav>
        </section>
    </body>
    <div>
        
        
    </div>
@endsection
