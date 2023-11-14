@extends('layouts.header')
@section('main-content')

<body>
    <section class="main-content">
        <nav class="main-content-nav">
            <div class="buttons">
                <a class="button" href="{{ route('admin.employee.create') }}">Добавить сотрудника</a>
            </div>
            <div class="product-categories">
                @foreach ($employees as $employee)
                <a href="{{ route('admin.employee.show', $employee->id) }}" class="carto4ka-CRUD">
                    <div class="image">
                        <p>{{ $employee->last_name }}</p> 
                    </div>
                </a>
                @endforeach
            </div>
        </nav>
        <div class="pagination-container">
            <div class="pagination-object">
                {{ $employees->links() }}
            </div>
        </div>
    </section>
</body>
@endsection