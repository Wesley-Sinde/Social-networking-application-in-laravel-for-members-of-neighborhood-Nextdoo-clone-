<?php

use App\Http\Controllers\API\AccessTokenController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostSitemapController;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\SitemapXmlController;
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

Route::resource('/home', BooksController::class);
Route::resource('/blog', PostsController::class);
Route::post('/blogupload', [PostsController::class, 'upload'])
    ->middleware('auth');

Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index'])->middleware('auth');
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages'])->middleware('auth');
Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage'])->middleware('auth');

Route::get('/PostComments/{post}', [CommentsController::class, 'fetchcomments']);
Route::get('/lastComments/{post}', [CommentsController::class, 'lastComments']);
Route::get('/userdata/{id}', [CommentsController::class, 'userdata']);
Route::get('/getcriticalpreview', [BooksController::class, 'getcriticalpreview']);
Route::get('/critical', [BooksController::class, 'critical']);
Route::get('/neighbors', [BooksController::class, 'neighbors']);
Route::get('/profiles/{id}', [BooksController::class, 'profiles']);
Route::get('/userlocation/{id}', [BooksController::class, 'userlocation']);
Route::post('/comment', [CommentsController::class, 'comment']);

Route::get('/getcriticalpreview/{id}', [BooksController::class, 'userdata']);
Route::get('/profile', [BooksController::class, 'profile'])->name('profile');
Route::post('/profile/check', [MyprofileController::class, 'checkName']);
Route::post('/profile', [MyprofileController::class, 'store']);
Route::get('/status', [UserController::class, 'userOnlineStatus']);
Route::get('/video', [UserController::class, 'video'])->name('/video');


// Route::get('/sitemap.xml', [SitemapXmlController::class, 'index'])->name('sitemap.index');
// Route::get('/sitemap/posts.xml', [PostSitemapController::class, 'index'])->name('sitemap.posts.index');
// Route::get('/sitemap/posts/{letter}.xml', [PostSitemapController::class, 'show'])->name('sitemap.posts.show');
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);




Route::get('/try', [CommentsController::class, 'try']);
// Route::get('/products', [ProductController::class, 'fetchProducts']);


// // ADMIN PAGES
// Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
// Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
// // Route::get('admin/dashboard', function () {
// //     return view('/admin/dashboardApp');
// // });
// Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');
// Route::prefix("admin")->middleware("auth", "isadmin")->group(function () {
//     Route::get('/dashboard', function () {
//         return view('/admin/dashboardApp');
//     });
// });

// Route::get('dashboard', [AdminAuthController::class, 'index'])->name('dashboard');
// // Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {
// //     // Admin Dashboard
// //     Route::get('dashboard', [AdminAuthController::class, 'index'])->name('dashboard');
// // });

//Route::get('access_token', AccessTokenController::class, 'generate_token');
Route::get('/api/access_token', [AccessTokenController::class, 'generate_token']);


Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('logout/', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/video', [AdminController::class, 'video'])->name('/video');


    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/usersdata', [AdminController::class, 'usersdata'])->name('admin.usersdata');
});
