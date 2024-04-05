<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Rota padrão
Route::get('/', function () {
    return view('index');
});

// Rotas da API
Route::get('/task/read', 'App\Http\Controllers\TaskController@read');
Route::get('/task/{id}', 'App\Http\Controllers\TaskController@readById');

Route::post('/task/create', 'App\Http\Controllers\TaskController@create'); 

Route::post('/task/update/{id}','App\Http\Controllers\TaskController@update');

Route::get('/task/delete/{id}', 'App\Http\Controllers\TaskController@delete');


