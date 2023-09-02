<?php

use App\Http\Controllers\WorkingProjectController;
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


Route::get('/', [WorkingProjectController::class, 'index' ])->name('index');
Route::get('/create', [WorkingProjectController::class, 'create' ])->name('create');
Route::post('/', [WorkingProjectController::class, 'store'])->name('store');
Route::get('/ /{}/edit', [WorkingProjectController::class, 'edit'])->name('edit');


