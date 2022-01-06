<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

Route::get('/author', [AuthorController::class, 'index']);
Route::put('/author', [AuthorController::class, 'buatartikelbaru']);
Route::get('/author/{id}', [AuthorController::class, 'detailartikel']);
Route::put('/author/{id}', [AuthorController::class, 'updateartikel']);
Route::delete('/author/{id}', [AuthorController::class, 'hapusartikel']);
