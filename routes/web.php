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
Route::get('/',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blog', [BlogController::class,'index']);
Route::get('/blog/create',[BlogController::class, 'create']);
Route::post('/blog/store',[BlogController::class,'store'])->name('blogs.store');
Route::put('/blog/{id}',[BlogController::class,'update'])->name('blogs.update');
Route::get('/blog/{id}',[BlogController::class,'show'])->name('blogs.show');
Route::get('/blog/{id}/edit',[BlogController::class,'edit'])->name('blogs.edit');
Route::delete('/blog/{id}',[BlogController::class,'destroy'])->name('blogs.destroy');
Route::get('/comment/{id}',[CommentController::class,'show'])->name('comments.show');
Route::get('/blog/{blogId}/comments/create',[CommentController::class,'create'])->name('blogs.comments.create');
Route::post('/blogs/{blogId}/comments',[CommentController::class,'store'])->name('blogs.comments.store');
Route::get('/comments/{commentId}/edit',[CommentController::class,'edit'])->name('comments.edit');
Route::put('/comments/{commentId}',[CommentController::class,'update'])->name('comments.update');
Route::delete('/comment/{commentId}',[CommentController::class,'destroy'])->name('comments.destroy');
