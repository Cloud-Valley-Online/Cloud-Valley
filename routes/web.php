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

//General View routes.
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Forum
Route::get('/forum', [App\Http\Controllers\Forum\ForumController::class, 'index'])->name('forum');
Route::get('/forum/{forum_id}/{forum_name}', [App\Http\Controllers\Forum\ForumController::class, 'show']);
Route::post('/forum/storethread', [App\Http\Controllers\Forum\ForumController::class, 'storethread'])->middleware('auth');

//Threads
Route::get('/forum/{forum_name}/{thread_id}/{thread_subject}', [App\Http\Controllers\Forum\ThreadController::class, 'show']);
Route::get('/forum/compose/thread/new/{forum_id}', [App\Http\Controllers\Forum\ThreadController::class, 'create'])->middleware('auth');
Route::post('/forum/thread/storepost', [App\Http\Controllers\Forum\ThreadController::class, 'storepost'])->middleware('auth');
Route::post('/forum/thread/poll', [App\Http\Controllers\Forum\ThreadController::class, 'poll'])->middleware('auth');

//Avatar
Route::get('/avatar', [App\Http\Controllers\Avatar\AvatarController::class, 'show'])->middleware('auth');
Route::get('avatar/customize/{user_id}/{item_id?}', [App\Http\Controllers\Avatar\AvatarController::class, 'customize'])->middleware('auth');




