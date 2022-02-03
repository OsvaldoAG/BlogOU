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
    return view('BlogUO.index');
})->name('inicio');

Route::get('/tema1', function(){
    return view('BlogUO.tema1');
})->name('tema1');

Route::get('/tema2', function(){
    return view('BlogUO.tema2');
})->name('tema2');

Route::get('/tema3', function(){
    return view('BlogUO.tema3');
})->name('tema3');

Route::get('/tema4', function(){
    return view('BlogUO.tema4');
})->name('tema4');

Route::get('/tema5', function(){
    return view('BlogUO.tema5');
})->name('tema5');

Route::get('/tema6', function(){
    return view('BlogUO.tema6');
})->name('tema6');

Route::get('/tema7', function(){
    return view('BlogUO.tema7');
})->name('tema7');

Route::get('/tema8', function(){
    return view('BlogUO.tema8');
})->name('tema8');

Route::get('/tema9', function(){
    return view('BlogUO.tema9');
})->name('tema9');