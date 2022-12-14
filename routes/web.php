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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Forum routes
Route::get('/forum', [App\Http\Controllers\Forum\ForumController::class, 'index'])->name('forum');
Route::get('/forum/{forum_name}/{forum_id}', [App\Http\Controllers\Forum\ForumController::class, 'show']);
Route::get('/forum/{forum_name}/{thread_subject}/{thread_id}', [App\Http\Controllers\Forum\ThreadController::class, 'show']);
Route::get('/forum/compose/topic/new/{forum_id}', [App\Http\Controllers\Forum\ThreadController::class, 'create']);



