<?php

use Illuminate\Http\Request;
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

Route::get('author', 'AuthorController@index');
Route::post('author', 'AuthorController@buatartikelbaru');
Route::get('/author/{id}','AuthorController@detailartikel');
Route::put('/author/{id}','AuthorController@updateartikel');
Route::delete('/author/{id}','AuthorController@hapusartikel');
