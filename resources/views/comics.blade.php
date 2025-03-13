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

    <section class="all-comics">
        <div class="container">
            <div class="row gap-3">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        {{-- componente card con elemento comic --}}
                        <x-card>
                            <x-slot:thumb> {{ $comic['thumb'] }} </x-slot>
                            <x-slot:title>{{ $comic['title'] }}</x-slot>
                            <x-slot:description>{{ $comic['description'] }}</x-slot>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
