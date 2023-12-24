<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ProfileAdminController;
// use App\Http\Controllers\AuthAdmin\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [CustomAuthController::class, 'home']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductDetailController::class, 'index'])->name('product.detail');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'blogDetail']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/dashbord', [DashboardController::class, 'index']);
    Route::get('/admin/category', [CategoriesController::class, 'index'])->name('admin.category');
    Route::get('admin/add-category', [CategoriesController::class, 'create'])->name('admin.category.create');
    Route::post('admin/save-category', [CategoriesController::class, 'store'])->name('admin.category.store');
    Route::get('admin/edit-category/{id}', [CategoriesController::class, 'edit'])->name('admin.category.edit');
    Route::put('admin/update-category/{id}', [CategoriesController::class, 'update'])->name('admin.category.update');
    Route::delete('admin/delete-category/{id}', [CategoriesController::class, 'destroy'])->name('admin.category.destroy');
    Route::post('admin/update-status', [CategoriesController::class, 'updateStatus'])->name('admin.category.updateStatus');
    Route::get('/admin/profile', [ProfileAdminController::class, 'index']);

    //product
    Route::get('admin/product', [ProductAdminController::class, 'index'])->name('admin.product');
    Route::get('admin/add-product', [ProductAdminController::class, 'create'])->name('admin.product.create');
    Route::post('admin/save-product', [ProductAdminController::class, 'store'])->name('admin.product.store');
    Route::get('admin/edit-product/{product_id}', [ProductAdminController::class, 'edit'])->name('admin.product.edit');
    Route::put('admin/update-product/{product_id}', [ProductAdminController::class, 'update'])->name('admin.product.update');
    Route::delete('admin/delete-product/{product_id}', [ProductAdminController::class, 'destroy'])->name('admin.product.destroy');
});
Route::middleware('auth')->group(function () {
    Route::post('/comment', [ProductDetailController::class, 'comment'])->name('comment');
});

require __DIR__ . '/adminauth.php';
