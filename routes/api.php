<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// --- Public Endpoints ---
Route::get('/', App\Http\Controllers\Api\HomeController::class);

Route::resource('/widgets', App\Http\Controllers\Api\WidgetController::class, [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

// --- Restricted Endpoints ---
Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});
