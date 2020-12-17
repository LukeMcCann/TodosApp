<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/todos', [TodosController::class, 'index']);

Route::get('/todos/{todo}', [TodosController::class, 'show']);

Route::get('/create', [TodosController::class, 'create']);

Route::post('/store', [TodosController::class, 'store']);