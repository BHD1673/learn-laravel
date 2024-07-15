<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {
    // Product Routes
    Route::get('san-pham',                      [ProductController::class, 'index'])->name('products.index');
    Route::get('san-pham/them-moi',             [ProductController::class, 'create'])->name('products.create');
    Route::post('san-pham',                     [ProductController::class, 'store'])->name('products.store');
    Route::get('san-pham/{id}',                 [ProductController::class, 'show'])->name('products.show');
    Route::get('san-pham/{id}/edit',            [ProductController::class, 'edit'])->name('products.edit');
    Route::put('san-pham/{id}',                 [ProductController::class, 'update'])->name('products.update');
    Route::delete('san-pham/{id}',              [ProductController::class, 'destroy'])->name('products.destroy');

    // Category Routes
    Route::get('danh-muc',                      [CategoryController::class, 'index'])->name('categories.index');
    Route::post('danh-muc/them-moi',            [CategoryController::class, 'create'])->name('categories.create');
    Route::post('danh-muc/xu-ly-them',          [CategoryController::class, 'store'])->name('categories.store');
    Route::get('danh-muc/{id}',                 [CategoryController::class, 'show'])->name('categories.show');
    Route::get('danh-muc/{id}/edit',            [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('danh-muc/{id}/xu-ly',           [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('danh-muc/{id}/xoa',          [CategoryController::class, 'destroy'])->name('categories.destroy');

    // User Routes

    // Dashboard Routes
    Route::get('/',                             [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/', function () {
    return view('client.index');
})->name('home');




// // Admin Routes
// Route::prefix('admin')->group(function () {
//     Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('login', [AuthController::class, 'login']);
//     Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

//     Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('admin.register');
//     Route::post('register', [AuthController::class, 'register']);

//     // Protected Admin Routes (Require Authentication)
//     Route::middleware('auth')->group(function () {
//         // Product Routes
//         Route::get('san-pham', [ProductController::class, 'index'])->name('products.index');
//         Route::get('san-pham/create', [ProductController::class, 'create'])->name('products.create');
//         Route::post('san-pham', [ProductController::class, 'store'])->name('products.store');
//         Route::get('san-pham/{id}', [ProductController::class, 'show'])->name('products.show');
//         Route::get('san-pham/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
//         Route::put('san-pham/{id}', [ProductController::class, 'update'])->name('products.update');
//         Route::delete('san-pham/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

//         // Category Routes
//         Route::get('danh-muc', [CategoryController::class, 'index'])->name('categories.index');
//         Route::get('danh-muc/create', [CategoryController::class, 'create'])->name('categories.create');
//         Route::post('danh-muc', [CategoryController::class, 'store'])->name('categories.store');
//         Route::get('danh-muc/{id}', [CategoryController::class, 'show'])->name('categories.show');
//         Route::get('danh-muc/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//         Route::put('danh-muc/{id}', [CategoryController::class, 'update'])->name('categories.update');
//         Route::delete('danh-muc/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
//     });
// });

