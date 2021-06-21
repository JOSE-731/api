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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Agreganos las rutas de la api

//Muestra solo la ruta show
Route::apiResource('v1/posts', 'ApiPostController')->only(['show', 'index']);

//Mustra toda las rutas
//Route::apiResource('v1/posts', 'PostController');
