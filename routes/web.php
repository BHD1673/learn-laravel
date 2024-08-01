<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Client\ClientProductsController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\ClientCommentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| Dont judge me on this pls
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Normal routes
Route::get('/',                                 [IndexController::class, 'index'])->name('home');
Route::get('/search',                           [ClientProductsController::class, 'search'])->name('search');
Route::get('/products/all',                     [ClientProductsController::class, 'index'])->name('userproducts.index');
Route::get('/products/{id}',                    [ClientProductsController::class, 'show'])->name('userproducts.show');
Route::get('/products/{id}/add-to-cart',        [ClientProductsController::class, 'addToCart'])->name('userproducts.addtocart');
Route::post('/handle-comment',                  [ClientCommentsController::class, 'store'])->name('comments.handlecomment');

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Protected routes for admin
Route::middleware(['auth', 'checkAdmin'])->prefix('admin')->group(function () {
    // Dashboard Routes
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Product Routes
    Route::get('san-pham', [ProductController::class, 'index'])->name('products.index');
    Route::get('san-pham/them-moi', [ProductController::class, 'create'])->name('products.create');
    Route::post('san-pham', [ProductController::class, 'store'])->name('products.store');
    Route::get('san-pham/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('san-pham/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('san-pham/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('san-pham/xoa/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Category Routes
    Route::get('danh-muc', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('danh-muc/them-moi', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('danh-muc/xu-ly-them', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('danh-muc/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('danh-muc/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('danh-muc/{id}/xu-ly', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('danh-muc/{id}/xoa', [CategoryController::class, 'destroy'])->name('categories.destroy');
});