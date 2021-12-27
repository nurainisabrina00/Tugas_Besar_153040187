<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// FRONTEND

Route::get('/home', [HomeController::class, 'home']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/my-account', [HomeController::class, 'my_account']);

Route::get('/product', [HomeController::class, 'product']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/login', [HomeController::class, 'login']);

Route::get('/compare', [HomeController::class, 'compare']);

Route::get('/single-product/{id_product}', [HomeController::class, 'single_product']);

Route::get('/blog-right-sidebar', [HomeController::class, 'blog_right_sidebar']);

Route::get('/blog-details-gallery/{id_blog}', [HomeController::class, 'blog_details_gallery']);

// LOGIN
// BACKEND
// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    //............................................................//
    Route::resource('/backend/product', ProductController::class);
    Route::resource('/backend/category', CategoryController::class);
    Route::resource('/backend/blog', BlogController::class);

    // LOGOUT
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
