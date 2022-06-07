<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrecioController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth')->group(function() {
    Route::apiResource('/precios', 'App\Http\Controllers\PrecioController');
    Route::apiResource('/empresas', 'App\Http\Controllers\EmpresaController');
    Route::apiResource('/alumnos', 'App\Http\Controllers\AlumnoController');
    Route::apiResource('/pagos', 'App\Http\Controllers\PagoController');
 });  
