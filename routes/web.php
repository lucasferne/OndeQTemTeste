<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);

Route::get('/produtos', [EventController::class, 'produtos']);

Route::get('/produto', [EventController::class, 'produto']);

Route::post('/products', [EventController::class, 'store']);

Route::get('produtos/create', [EventController::class, 'create']);

Route::get('/dashboard', [EventController::class, 'dashboard']);

Route::delete('produtos/{id}', [EventController::class, 'destroy']);
