<?php

use App\Http\Controllers\BlogController;
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
Route::get('/',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blog', [BlogController::class,'index']);
Route::get('/blog/create',[BlogController::class, 'create']);
Route::post('/blog/store',[BlogController::class,'store'])->name('blogs.store');
Route::put('/blog/{id}',[BlogController::class,'update'])->name('blogs.update');
Route::get('/blog/{id}',[BlogController::class,'show'])->name('blogs.show');
Route::get('/blog/{id}/edit',[BlogController::class,'edit'])->name('blogs.edit');

