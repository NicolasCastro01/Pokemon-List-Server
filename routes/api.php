<?php

use App\Http\Controllers\Pokemon\PokemonController;
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

Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::prefix('/pokemon')->group(function() {
        Route::controller(PokemonController::class)->group(function() {
            Route::get('/all', 'all');
            Route::post('/import', 'import');
        });
    });
});
