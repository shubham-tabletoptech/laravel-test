<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/todo',[\App\Http\Controllers\TodoController::class,'index'])->name('todo.index');
Route::post('/todo/store',[\App\Http\Controllers\TodoController::class,'store'])->name('todo.store');
