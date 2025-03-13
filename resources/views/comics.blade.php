@extends('layouts/default')

@section('title')
    Lista fumetti
@endsection

@section('content')
    @php
        // static comics data from assets folder
        // dd(config('comics'));
        $comics = config('comics');
    @endphp

    <section class="all-comics my-4">
        <div class="container">
            <div class="row row-gap-4">
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        {{-- componente card con elemento comic --}}
                        <x-card>
                            <x-slot:thumb> {{ $comic['thumb'] }} </x-slot>
                            <x-slot:title>{{ $comic['title'] }}</x-slot>
                            <x-slot:series>{{ $comic['series'] }}</x-slot>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
