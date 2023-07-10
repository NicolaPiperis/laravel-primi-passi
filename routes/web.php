<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('homepage');
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/', function () {
    $name = 'Nicola';
    $surname = 'Piperis';
    $points = 0;
    $links = [
        'Home',
        'About',
        'Contact'
    ];

    return view('homepage', compact('name', 'surname', 'points', 'links'));
});
