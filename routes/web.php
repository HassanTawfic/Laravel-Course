<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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
Route::get('/',[BlogController::class,'index'])->name('blogs.index')->middleware('auth');
Route::get('/blog', [BlogController::class,'index'])->middleware('auth');
Route::get('/blog/create',[BlogController::class, 'create'])->middleware('auth');
Route::post('/blog/store',[BlogController::class,'store'])->name('blogs.store')->middleware('auth');
Route::put('/blog/{id}',[BlogController::class,'update'])->name('blogs.update')->middleware('auth');
Route::get('/blog/{id}',[BlogController::class,'show'])->name('blogs.show')->middleware('auth');
Route::get('/blog/{id}/edit',[BlogController::class,'edit'])->name('blogs.edit')->middleware('auth');
Route::delete('/blog/{id}',[BlogController::class,'destroy'])->name('blogs.destroy')->middleware('auth');
Route::get('/comment/{id}',[CommentController::class,'show'])->name('comments.show')->middleware('auth');
Route::get('/blog/{blogId}/comments/create',[CommentController::class,'create'])->name('blogs.comments.create')->middleware('auth');
Route::post('/blogs/{blogId}/comments',[CommentController::class,'store'])->name('blogs.comments.store')->middleware('auth');
Route::get('/comments/{commentId}/edit',[CommentController::class,'edit'])->name('comments.edit')->middleware('auth');
Route::put('/comments/{commentId}',[CommentController::class,'update'])->name('comments.update')->middleware('auth');
Route::delete('/comment/{commentId}',[CommentController::class,'destroy'])->name('comments.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
