php artisan make:controller newscontroller<?php

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
    echo('Selamat Datang');
});

Route::get('/about', function () {
    echo('Dafi Azka Banurella Zhuhri');
    echo('2031710110');
});

Route::get('/articles/1', function () {
    echo('halaman artikel dengan id 1');
});

Route::get('/articles/2', function () {
    echo('halaman artikel dengan id 2');
});
