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
    return view('welcome');
});

Route::post('/create', function () {
    return view('create');
});

Route::post('/update', function () {
    return view('update');
});

Route::get('/read', function () {
    return view('read');
});

Route::delete('/delete', function () {
    return view('delete');
});


Route::get('/test', function () {
    return view('test');
});
