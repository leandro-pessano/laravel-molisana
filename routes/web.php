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
    return view('home');
})
->name('home');

Route::get('/prodotti', function () {
    $data = ['pasta' => config('pasta')];
    return view('products', $data);
})
->name('products');

Route::get('/dettaglio/{id}', function ($id) {
    $data = ['dettaglio' => config('pasta')[$id]];
    return view('dettagli', $data);
})
->name('dettagli');

Route::get('/news', function () {
    return view('news');
})
->name('news');
