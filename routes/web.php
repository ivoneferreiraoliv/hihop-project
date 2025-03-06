<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/eventos', function(){
    return view ('admin.eventos');
});

Route::get('/posts', function(){
    return view ('admin.posts');
});

Route::get('/usuarios', function(){
    return view ('admin.usuarios');
});

Route::get('/comentarios', function(){
    return view ('admin.comentarios');
});