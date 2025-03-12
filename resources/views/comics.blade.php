@extends('layouts/default')

@section('title')
Lista fumetti

@endsection

@section('content')

<section class="all-comics">
    <h2 class="all-comics__title">Tutti i fumetti</h2>
    <div class="all-comics__container">

        @for ($i = 1; $i <= 5; $i++) <div class="comic-card">
            <img src="https://picsum.photos/id/100/200/300" alt="comic">
            <h3 class="comic-card__title">Comic numero {{ $i }}</h3>
            <p class="comic-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in sem nec
                ipsum dignissim efficitur.
            </p>

            @endfor
    </div>
    </div>

</section>

@endsection