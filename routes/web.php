<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyNeighborController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReactController;

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


Route::get('/inbox', function () {
    return view('userinbox');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio']);

Route::get('/About', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/Contact ', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/Services ', [App\Http\Controllers\HomeController::class, 'services']);

Auth::routes();

Route::post('/home/{post}/reaction', [ReactController::class, 'toggle'])
    ->middleware('auth');

Route::resource('/home', MyNeighborController::class);
Route::resource('/blog', PostsController::class);
Route::post('/blogupload', [PostsController::class, 'upload'])
    ->middleware('auth');

Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index'])->middleware('auth');
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages'])->middleware('auth');
Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage'])->middleware('auth');

Route::get('/PostComments/{post}', [CommentsController::class, 'fetchcomments']);
Route::get('/userdata/{id}', [CommentsController::class, 'userdata']);


Route::get('/try', [CommentsController::class, 'try']);
// Route::get('/products', [ProductController::class, 'fetchProducts']);
