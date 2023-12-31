<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ProfileAdminController;
// use App\Http\Controllers\AuthAdmin\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoMo\ReturnUrlController;
use App\Http\Controllers\OrderController;
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
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/search', [HomeController::class, 'searchProduct'])->name('search.product');
Route::get('/product-by-category/{id}', [ProductController::class, 'productByCate'])->name('product.by.category');
Route::get('/products/{id}', [ProductDetailController::class, 'index'])->name('product.detail');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'blogDetail']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);



Route::middleware(['auth'])->group(function () {
    Route::get('/order-history', [OrderController::class, 'getAllOrder'])->name('order.history');
    Route::get('/view-cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/remove-from-cart/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
    // Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::get('/checkout', [CheckoutController::class, 'viewCheckout'])->name('checkout.view');
    Route::post('/order/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/order/{id}', [OrderController::class, 'update'])->name('orders.update');
    Route::get('/order-detail/{id}', [OrderController::class, 'viewOrderDetails'])->name('orders.detail.view');

    Route::post('/cart/update/{productId}', [CartController::class, 'updateCart'])->name('cart.update');
});



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
    Route::post('admin/update-category-status', [CategoriesController::class, 'updateStatus'])->name('admin.category.updateStatus');
    Route::get('/admin/profile', [ProfileAdminController::class, 'index']);

    //product
    Route::get('admin/product', [ProductAdminController::class, 'index'])->name('admin.product');
    Route::get('admin/add-product', [ProductAdminController::class, 'create'])->name('admin.product.create');
    Route::post('admin/save-product', [ProductAdminController::class, 'store'])->name('admin.product.store');
    Route::get('admin/edit-product/{product_id}', [ProductAdminController::class, 'edit'])->name('admin.product.edit');
    Route::put('admin/update-product/{product_id}', [ProductAdminController::class, 'update'])->name('admin.product.update');
    Route::delete('admin/delete-product/{product_id}', [ProductAdminController::class, 'destroy'])->name('admin.product.destroy');
    Route::post('admin/update-product-status', [ProductAdminController::class, 'updateStatus'])->name('admin.product.updateStatus');

    //Blog
    Route::get('admin/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
    Route::get('admin/add-blog', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::post('admin/save-blog', [AdminBlogController::class, 'store'])->name('admin.blog.store');
    Route::get('admin/edit-blog/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('admin/update-blog/{id}', [AdminBlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('admin/delete-blog/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blog.destroy');
    Route::post('admin/update-blog-status', [AdminBlogController::class, 'updateStatus'])->name('admin.blog.updateStatus');
    //order
    Route::get('admin/order', [OrderAdminController::class, 'index'])->name('admin.order');
    Route::post('admin/update-order-status', [OrderAdminController::class, 'updateStatus'])->name('admin.order.updateStatus');
    Route::get('admin/order/{id}', [OrderAdminController::class, 'orderDetail'])->name('admin.order.detail');
});
Route::middleware('auth')->group(function () {
    Route::post('/comment', [ProductDetailController::class, 'comment'])->name('comment');
    Route::post('/remove-from-cart/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/view-cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/update-cart', [CartController::class, 'updateCart']);
    Route::post('/add-rating', [ProductDetailController::class, 'addRating'])->name('insert.rating');
    Route::get('/momo/returnUrl', [ReturnUrlController::class, 'index'])->name('momo.returnurl');
});

require __DIR__ . '/adminauth.php';
