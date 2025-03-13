@extends('layouts/default')

@section('title')
    Lista fumetti
@endsection

@section('content')
    @php
        // static comics data from assets folder
        dd(config('comics'));
        // $comics = config('comics');
    @endphp

    <section class="all-comics">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
@endsection
