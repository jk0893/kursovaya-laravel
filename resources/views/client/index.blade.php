@extends('layouts.header')
@section('main-content')

<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('admin.client.create') }}">Добавить клиента</a>
            </div>
            <div class="product-categories">
                @foreach ($clients as $client)
                <a href="{{ route('admin.client.show', $client->id) }}" class="carto4ka-CRUD">
                    <div class="image">
                        <p>{{ $client->last_name }}</p> 
                    </div>
                </a>
                @endforeach
            </div>
        </nav>
        <div class="pagination-container">
            <div class="pagination-object">
                {{ $clients->links() }}
            </div>
        </div>
    </section>
</body>
@endsection