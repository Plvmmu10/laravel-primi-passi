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
    $title = 'Hello World';

    return view('home', compact('title'));
});

Route::get('/ita', function () {
    $title = 'Ciao Mondo';

    return view('ita', compact('title'));
})->name('ita');

Route::get('/esp', function () {
    $title = 'Hola Mundo';

    return view('es', compact('title'));
})->name('esp');