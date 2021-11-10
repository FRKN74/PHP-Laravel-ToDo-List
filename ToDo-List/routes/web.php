<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Todo\TodoController;

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

Route::get('/',[TodoController::class,'index'])->name('index');
Route::post('/', [TodoController::class,'todoCreate'])->name('todo.create');
Route::get('/updateOkey/{id}',[TodoController::class,'todoOkey'])->name('todo.okey');
Route::get('/updateLater/{id}',[TodoController::class,'todoLater'])->name('todo.later');
Route::get('/updateGerial/{id}',[TodoController::class,'todoGerial'])->name('todo.gerial');

Route::get('/delete/{id}', [TodoController::class,'todoDelete'])->name('todo.delete');