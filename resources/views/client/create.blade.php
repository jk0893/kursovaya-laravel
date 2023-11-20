@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <div class="user-info">
                <div class="create-form-content">
                    <div class="create-form-section">

                        <div class="create-form-header">
                            <h1 class="create-form-title">Добавление клиента</h1>
                        </div>

                        <div class="create-form-body">
                            <form class="create-form-form" action="{{ route('admin.client.store') }}" method="POST">
                                @csrf
                                <nav class="create-form-nav">
                                    <div>
                                        <label class="modal-inputs" for="last_name">Фамилия</label>
                                        <input value="{{ old('last_name') }}" type="text" name="last_name">    
                                        @error('last_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <label class="modal-inputs" for="first_name">Имя</label>
                                    <input value="{{ old('last_name') }}" type="text" name="first_name">

                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label class="modal-inputs" for="father_name">Отчество</label>
                                    <input value="{{ old('last_name') }}" type="text" name="father_name">

                                    @error('father_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label class="modal-inputs" for="birth_date">Дата рождения</label>
                                    <input value="{{ old('last_name') }}" type="date" name="birth_date">

                                    @error('birth_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label class="modal-inputs" for="passport">Паспорт:</label>
                                    <input value="{{ old('last_name') }}" type="text" name="passport">

                                    @error('passport')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label class="modal-inputs" for="phone">Номер телефона:</label>
                                    <input value="{{ old('last_name') }}" type="text" name="phone" value="+7">

                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

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
