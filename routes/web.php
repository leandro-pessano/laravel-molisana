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
    $pastaLunga = array_filter(config('pasta'), function($e){
      return $e['tipo'] == 'lunga';
    });

    $pastaCorta = array_filter(config('pasta'), function($e){
      return $e['tipo'] == 'corta';
    });

    $pastaCortissima = array_filter(config('pasta'), function($e){
      return $e['tipo'] == 'cortissima';
    });

    $data = [
      'pastaLunga' => $pastaLunga,
      'pastaCorta' => $pastaCorta,
      'pastaCortissima' => $pastaCortissima
    ];
    return view('products', $data);
})
->name('products');

Route::get('/dettaglio/{id}', function ($id) {
  if (is_numeric($id) && $id >= 0 && $id < count(config('pasta'))) {
    $data = ['dettaglio' => config('pasta')[$id]];
    return view('dettagli', $data);
  } else {
    abort('404');
  }
})
->name('dettagli');

Route::get('/news', function () {
    return view('news');
})
->name('news');
