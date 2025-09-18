<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nombre', function () {
    return view('biografia.nombre');
});

Route::get('/nacimiento', function () {
    return view('biografia.nacimiento');
});
