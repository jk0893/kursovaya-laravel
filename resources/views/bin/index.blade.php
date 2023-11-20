@extends('layouts.header')
@section('main-content')

    <body>
        <section class="main-content">
            <nav class="main-content-nav">
                <div class="bin-container">
                    <div class="bin">
                        <img class="bin-icon" src="../../images/icons/bin-icon.png">
                        <h1 class="logo-text-header">Корзина</h1>
                        <section class="bin-content">
                            {{-- @foreach ($products as $product) --}}
                            <article>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quidem omnis temporibus, nulla
                                laboriosam illum beatae quis, aliquam rerum unde voluptatum illo consequuntur minima
                                voluptatem molestiae. Officiis ullam sunt et, architecto, voluptates soluta ducimus nam,
                                repellat laudantium vero illo rerum. Alias cumque, distinctio, pariatur atque ratione
                                reiciendis dignissimos maxime magnam vitae nihil dicta error laudantium? Autem repudiandae
                                voluptas assumenda sunt. Iusto libero tempora, itaque dignissimos ut dicta corrupti
                                necessitatibus ipsum quas cum officia similique voluptatibus veritatis a, cumque
                                consequuntur asperiores aperiam nobis delectus minus! Nulla optio autem reprehenderit
                                soluta? Quisquam nobis excepturi ipsum molestiae earum maxime, suscipit ipsam nostrum et?
                            </article>
                        </section>
                    </div>
                </div>
            </nav>
        </section>
    </body>
@endsection
