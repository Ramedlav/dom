<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    if (Auth::check()) { Auth::user()->lang = $locale; Auth::user()->update(); }
    return redirect()->back();
})->name('locale');

Route::get('/',   function (){ return redirect('/home'); });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/action', [App\Http\Controllers\HomeController::class, 'action'])->name('action');
// Route::get('/ads', [App\Http\Controllers\HomeController::class, 'getAds'])->name('getAds');

// Google URL
//Route::prefix('google')->name('google.')->group( function(){
//    Route::get('login', [App\Http\Controllers\GoogleController::class, 'loginWithGoogle'])->name('login');
//    Route::any('callback', [App\Http\Controllers\GoogleController::class, 'callbackFromGoogle'])->name('callback');
//});
Route::get('auth/google/login', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'callbackFromGoogle'])->name('callback');;
//Route::get('/auth/google', 'Auth\LoginController@redirectToProvider');
//Route::get('/auth/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle']);
Route::get('/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);
// Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

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
    Route::get('/users/',[UserController::class, 'show'])->name('users')->middleware('auth'),
    Route::post('/users/listusers',[UserController::class, 'listusers'])->name('listusers')->middleware('auth'),
    Route::get('/users/edit/{id_user}',[UserController::class, 'edituser'])->name('editEditUser')->middleware('auth'),
    Route::post('/saveuser/',[UserController::class, 'save'])->name('saveuser')->middleware('auth'),

    Route::get('/profile/',[MyProfileController::class, 'show'])->name('profile')->middleware('auth'),
    Route::post('/profile/',[MyProfileController::class, 'save'])->name('saveprofile')->middleware('auth'),
    Route::post('/updateuserphoto/',[MyProfileController::class, 'updatePhoto'])->middleware('auth'),
    Route::post('/deleteuserphoto/',[MyProfileController::class, 'deletePhoto'])->middleware('auth'),

    Route::get('/map/',[MapController::class, 'show'])->name('showmap')->middleware('auth'),

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
    Route::post('/post/delete/{id_post}',[PostController::class, 'delete'])->middleware('auth'),
    Route::post('/post/create',[PostController::class, 'create'])->name('create')->middleware('auth'),
    Route::get('/post/create/form',[PostController::class, 'createForm'])->name('createCreateForm')->middleware('auth'),
    Route::post('/post/edit/{id_post}',[PostController::class, 'edit'])->name('edit')->middleware('auth'),
    Route::get('/post/edit/form/{id_post}',[PostController::class, 'editForm'])->name('editEditForm')->middleware('auth'),
    Route::post('/edit/updatephoto/',[PostController::class, 'updatePhoto'])->middleware('auth'),
    Route::post('/edit/addphotos/',[PostController::class, 'addPhotos'])->middleware('auth'),
    Route::post('/edit/deletephoto/',[PostController::class, 'deletePhoto'])->middleware('auth'),
    Route::post('/setWishlist',[PostController::class, 'setWishlist'])->name('setWishlist')->middleware('auth'),
    Route::get('/wishlist',[PostController::class, 'getWishlist'])->name('wishlist')->middleware('auth'),
    Route::post('/setSavedSearch',[PostController::class, 'setSavedSearch'])->name('setSavedSearch')->middleware('auth'),
    Route::post('/delSavedSearch',[PostController::class, 'delSavedSearch'])->name('delSavedSearch')->middleware('auth'),
    Route::get('/SavedSearch',[PostController::class, 'SavedSearch'])->name('savedsearch')->middleware('auth'),
    Route::post('/setEmailNotify',[PostController::class, 'setEmailNotify'])->name('setEmailNotify')->middleware('auth'),
    Route::post('/getNotify',[MessageController::class, 'getNotify'])->name('getNotify')->middleware('auth'),
    Route::post('/getChatMessages',[MessageController::class, 'getChatMessages'])->name('getChatMessages')->middleware('auth'),
    Route::post('/setChatMessages',[MessageController::class, 'setChatMessages'])->name('setChatMessages')->middleware('auth'),
    Route::post('/checkChatMessages',[MessageController::class, 'checkChatMessages'])->name('checkChatMessages')->middleware('auth'),
    Route::post('/setChatImages',[MessageController::class, 'setChatImages'])->name('setChatImages')->middleware('auth'),
    ]);


Route::get('/home/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');



