@extends('layouts/default')

@section('content')

<section class="not-found">
    <div class="container message">
        <h2 class="not-found__title">404</h2>
        <p class="not-found__text">La pagina richiesta non è disponibile.</p>
        <a href="{{ url('/') }}" class="not-found__button">Torna alla home</a>
    </div>
</section>
@endsection