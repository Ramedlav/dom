<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
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

Route::get('/',   function (){ return redirect('/home'); });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/action', [App\Http\Controllers\HomeController::class, 'action'])->name('action');
// Route::get('/ads', [App\Http\Controllers\HomeController::class, 'getAds'])->name('getAds');


Route::get('/post/{id_post}',[PostController::class, 'view'])->name('show');
Route::get('/post/allphotos/{id_post}',[PostController::class, 'PhotoAll'])->name('showphotos');
Route::post('/post/publish/{id_post}',[PostController::class, 'publish'])->name('publish');
Route::get('/posts/',[PostController::class, 'showAll'])->name('showAll');
Route::get('/gettown/',[PostController::class, 'getTown'])->name('getTown');
Route::post('/home_filters/',[PostController::class, 'home_filters'])->name('home_filters');
Route::get('/home_filters/',[PostController::class, 'home_filters'])->name('home_filters');
Route::get('/getcity/',[PostController::class, 'getCity'])->name('getCity');
Route::post('/getcity/',[PostController::class, 'getCity'])->name('getCity');
Route::post('/filterPosts/',[PostController::class, 'filterPosts'])->name('filterPosts');
Route::get('/filterPosts/',[PostController::class, 'filterPosts'])->name('filterPosts');

Auth::routes([
    Route::get('/myposts/',[PostController::class, 'myPosts'])->name('showMy')->middleware('auth'),

    Route::post('/dialog/create/',[MessageController::class, 'CreatePostDialog'])->name('CreatePostDialog')->middleware('auth'),
    Route::get('/dialog/{dialog_id}',[MessageController::class, 'ShowDialog'])->name('ShowDialog')->middleware('auth'),
    Route::post('/dialog/{dialog_id}',[MessageController::class, 'ShowDialog'])->name('ShowDialog')->middleware('auth'),
    Route::get('/dialogs/',[MessageController::class, 'ShowDialogs'])->name('ShowDialogs')->middleware('auth'),
    Route::post('/dialog/create/form/',   [MessageController::class, 'CreateDialogForm'])->name('CreateDialogForm')->middleware('auth'),
    Route::get('/dialog/create/form/',   [MessageController::class, 'CreateDialogForm'])->name('CreateDialogForm')->middleware('auth'),
    Route::post('/message',[MessageController::class, 'SendMessage'])->name('SendMessage')->middleware('auth'),
    Route::get('/message',[MessageController::class, 'SendMessage'])->name('SendMessage')->middleware('auth'),

    Route::get('/post/update/{id_post}',[PostController::class, 'upload'])->middleware('auth'),
    Route::post('/filters/',[PostController::class, 'filters'])->name('filters'),
    Route::get('/filters/',[PostController::class, 'filters']),
    Route::get('/post/delete/{id_post}',[PostController::class, 'delete'])->middleware('auth'),
    Route::post('/post/create',[PostController::class, 'create'])->name('create')->middleware('auth'),
    Route::get('/post/create/form',[PostController::class, 'createForm'])->name('createCreateForm')->middleware('auth'),
    Route::post('/post/edit/{id_post}',[PostController::class, 'edit'])->name('edit')->middleware('auth'),
    Route::get('/post/edit/form/{id_post}',[PostController::class, 'editForm'])->name('editEditForm')->middleware('auth'),
    ]);


Route::get('/home/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');



