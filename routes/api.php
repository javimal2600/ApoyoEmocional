<?php

use App\Http\Controllers\PsicologoController;
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

    //Planes
    Route::get('psicologos', [ PsicologoController::class,'index']);
    Route::post('create-psicologo', [ PsicologoController::class,'store']);
    Route::post('update-psicologo', [ PsicologoController::class,'update']);
    Route::post('delete-plan', [ PsicologoController::class,'destroy']);


