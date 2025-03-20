<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "É O SISTEMA";
});

Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    return "a soma é: ".$num1 + $num2;
});

