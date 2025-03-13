@extends('layouts/default')

{{-- homepage title --}}
@section('title')
Home
@endsection


{{-- content --}}
@section('content')

<section class="hero">
    <div class="container">
        <h2 class="hero__title">Benvenuto alla homepage</h2>
        <p class="hero__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, veritatis.</p>
        <button class="btn btn-outline-primary">Vai alla lista dei fumetti</button>
    </div>
</section>

@endsection