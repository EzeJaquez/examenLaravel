<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CasalsController;
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
Route::get('/', [App\Http\Controllers\CasalsController::class, 'index'])->name('home');
Route::get('/delete/{id}', [App\Http\Controllers\CasalsController::class, 'destroy'])->name('destroy');
Route::get('/create', [App\Http\Controllers\CasalsController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\CasalsController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\CasalsController::class, 'edit'])->name('edit');
Route::patch('/edit/{id}/update', [App\Http\Controllers\CasalsController::class, 'update'])->name('update');


