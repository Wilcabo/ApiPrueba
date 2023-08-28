<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EpisodeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/



Route::get('/characters', [CharactersController::class, 'index']);
Route::post('/characters', [CharactersController::class, 'store']);
Route::get('/characters/{id}', [CharactersController::class, 'show']);
Route::put('/characters/{id}', [CharactersController::class, 'update']);
Route::delete('/characters/delete/{id}', [CharactersController::class, 'destroy']);
  
Route::get('/locations', [LocationController::class, 'index']);
Route::post('/locations', [CharactersController::class, 'store']);
Route::get('/locations/{id}', [CharactersController::class, 'show']);
Route::put('/locations/{id}', [CharactersController::class, 'update']);
Route::delete('/locations/delete/{id}', [CharactersController::class, 'destroy']);

Route::get('/episodes', [EpisodeController::class, 'index']);
Route::post('/episodes', [CharactersController::class, 'store']);
Route::get('/episodes/{id}', [CharactersController::class, 'show']);
Route::put('/episodes/{id}', [CharactersController::class, 'update']);
Route::delete('/episodes/delete/{id}', [CharactersController::class, 'destroy']);