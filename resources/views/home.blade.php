@extends('layouts/default')

{{-- homepage title --}}
@section('title')
Home
@endsection


{{-- content --}}
@section('content')

<section class="hero">
    <div class="hero__container">
        <h2 class="hero__title">Benvenuto alla homepage</h2>
        <p class="hero__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, veritatis.</p>
        <button class="hero__button">Vai alla lista</button>
    </div>
</section>

@endsection