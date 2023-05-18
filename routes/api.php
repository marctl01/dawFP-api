<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\UfController;
use App\Http\Controllers\EvaluacionController;

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

// Rutas para Login y Register


// Route::middleware('auth:api')->group(function () {
    
    // Rutas para la entidad "User"
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    // Rutas para la entidad "Rol"
    Route::get('roles', [RolController::class, 'index']);
    Route::get('roles/{rol}', [RolController::class, 'show']);
    Route::post('roles', [RolController::class, 'store']);
    Route::put('roles/{rol}', [RolController::class, 'update']);
    Route::delete('roles/{rol}', [RolController::class, 'destroy']);

    // Rutas para la entidad "Modulo"
    Route::get('modulos', [ModuloController::class, 'index']);
    Route::get('modulos/{modulo}', [ModuloController::class, 'show']);
    Route::post('modulos', [ModuloController::class, 'store']);
    Route::put('modulos/{modulo}', [ModuloController::class, 'update']);
    Route::delete('modulos/{modulo}', [ModuloController::class, 'destroy']);

    // Rutas para la entidad "Uf"
    Route::get('ufs', [UfController::class, 'index']);
    Route::get('ufs/{uf}', [UfController::class, 'show']);
    Route::post('ufs', [UfController::class, 'store']);
    Route::put('ufs/{uf}', [UfController::class, 'update']);
    Route::delete('ufs/{uf}', [UfController::class, 'destroy']);

    // Rutas para la entidad "Evaluacion"
    Route::get('evaluaciones', [EvaluacionController::class, 'index']);
    Route::get('evaluaciones/{evaluacion}', [EvaluacionController::class, 'show']);
    Route::post('evaluaciones', [EvaluacionController::class, 'store']);
    Route::put('evaluaciones/{evaluacion}', [EvaluacionController::class, 'update']);
    Route::delete('evaluaciones/{evaluacion}', [EvaluacionController::class, 'destroy']);
// });
