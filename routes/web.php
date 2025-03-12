<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/comic/{id}', function ($id) {
    return view('comic', ['id' => $id]);
})->name('comic');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/request-new-comic', function () {
    return view('request-new-comic');
})->name('request-new-comic');
