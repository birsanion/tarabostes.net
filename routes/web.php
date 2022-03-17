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
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('/design', function () {
    return view('design');
})->name('design');

Route::get('/api-integration', function () {
    return view('api-integration');
})->name('api-integration');

Route::get('/mobile-development', function () {
    return view('mobile-development');
})->name('mobile-development');

Route::get('/web-development', function () {
    return view('web-development');
})->name('web-development');

Route::get('/get-in-touch', function () {
    return view('get-in-touch');
})->name('get-in-touch');

Route::get('/about', function () {
    return view('about');
})->name('about');
