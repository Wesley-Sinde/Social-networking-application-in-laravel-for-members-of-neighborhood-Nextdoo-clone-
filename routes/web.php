<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyNeighborController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostSitemapController;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\SitemapXmlController;

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
Route::get('/lastComments/{post}', [CommentsController::class, 'lastComments']);
Route::get('/userdata/{id}', [CommentsController::class, 'userdata']);
Route::get('/getcriticalpreview', [MyNeighborController::class, 'getcriticalpreview']);
Route::get('/critical', [MyNeighborController::class, 'critical']);
Route::get('/neighbors', [MyNeighborController::class, 'neighbors']);
Route::get('/profiles/{id}', [MyNeighborController::class, 'profiles']);
Route::post('/comment', [CommentsController::class, 'comment']);

Route::get('/getcriticalpreview/{id}', [MyNeighborController::class, 'userdata']);
Route::get('/profile', [MyNeighborController::class, 'profile'])->name('profile');
Route::post('/profile/check', [MyprofileController::class, 'checkName']);
Route::post('/profile', [MyprofileController::class, 'store']);

// Route::get('/sitemap.xml', [SitemapXmlController::class, 'index'])->name('sitemap.index');
// Route::get('/sitemap/posts.xml', [PostSitemapController::class, 'index'])->name('sitemap.posts.index');
// Route::get('/sitemap/posts/{letter}.xml', [PostSitemapController::class, 'show'])->name('sitemap.posts.show');
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);




Route::get('/try', [CommentsController::class, 'try']);
// Route::get('/products', [ProductController::class, 'fetchProducts']);
