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

Route::get('/niñez', function () {
    return view('biografia.niñez');
});

Route::get('/adolescencia', function () {
    return view('biografia.adolescencia');
});

Route::get('/actualidad', function () {
    return view('biografia.actualidad');
});
