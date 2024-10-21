<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/html', function () {
    return view('html');
});

Route::get('/css', function () {
    return view('css');
});

Route::get('/js', function () {
    return view('js');
});

Route::get('/vue', function () {
    return view('vue');
});

Route::get('/php', function () {
    return view('php');
});

Route::get('/laravel', function () {
    return view('laravel');
});
