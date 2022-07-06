<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\SquadsController;
use App\Http\Controllers\TribosController;
use App\Http\Controllers\FuncionariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/areas', [AreasController::class, 'index']);
Route::get('/area/create', [AreasController::class, 'create']);
Route::post('/area/salvar', [AreasController::class, 'story']);
Route::get('/area/edit/{id}', [AreasController::class, 'edit']);
Route::patch('/area/update/{id}', [AreasController::class, 'update']);
Route::delete('/area/delete/{id}', [AreasController::class, 'destroy']);

Route::get('/squads', [SquadsController::class, 'index']);
Route::get('/squad/create', [SquadsController::class, 'create']);
Route::post('/squad/salvar', [SquadsController::class, 'story']);
Route::get('/squad/edit/{id}', [SquadsController::class, 'edit']);
Route::patch('/squad/update/{id}', [SquadsController::class, 'update']);
Route::delete('/squad/delete/{id}', [SquadsController::class, 'destroy']);

Route::get('/tribos', [TribosController::class, 'index']);
Route::get('/tribo/create', [TribosController::class, 'create']);
Route::post('/tribo/salvar', [TribosController::class, 'story']);
Route::get('/tribo/edit/{id}', [TribosController::class, 'edit']);
Route::patch('/tribo/update/{id}', [TribosController::class, 'update']);
Route::delete('/tribo/delete/{id}', [TribosController::class, 'destroy']);

Route::get('/funcionarios', [FuncionariosController::class, 'index']);
Route::get('/funcionario/create', [FuncionariosController::class, 'create']);
Route::post('/funcionario/salvar', [FuncionariosController::class, 'story']);
Route::get('/funcionario/edit/{id}', [FuncionariosController::class, 'edit']);
Route::patch('/funcionario/update/{id}', [FuncionariosController::class, 'update']);
Route::delete('/funcionario/delete/{id}', [FuncionariosController::class, 'destroy']);
