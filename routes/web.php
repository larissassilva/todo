<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', function () {
    return 'Rota de teste funcionando!';
});
