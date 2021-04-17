<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('fee', [App\Http\Controllers\UserController::class, 'index']);
Route::post('add', [App\Http\Controllers\UserController::class, 'insert']);
Route::get('fetchdata', [App\Http\Controllers\UserController::class, 'show']);
Route::get('edit/{id}', [App\Http\Controllers\UserController::class,'edit']);
Route::post('update/{id}', [App\Http\Controllers\UserController::class,'update']);
Route::get('delete/{id}', [App\Http\Controllers\UserController::class,'delete']);

Route::get('image-upload',[ImageuploadController::class, 'image_upload'])->name('image.upload');
Route::post('image-upload',[ImageuploadController::class, 'upload_post_image'])->name('upload.post.image');
