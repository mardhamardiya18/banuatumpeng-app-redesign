<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TestiController;
use App\Models\Banner;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/testimoni', [TestiController::class, 'index'])->name('testimoni');
Route::post('/testimoni-store', [TestiController::class, 'store'])->name('testimoni-store');

Route::prefix('katalog')->group(function () {
    Route::get('/', [KatalogController::class, 'index'])->name('katalog');
    Route::get('/semua', [ProductController::class, 'index'])->name('category');
    Route::get('/category/{slug}', [ProductController::class, 'category'])->name('category-detail');
    Route::get('/product/{slug}', [ProductController::class, 'product'])->name('product-detail');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard-admin');

    Route::get('/kelola-pesanan', function () {
        return view('pages.admin.transactions.index');
    })->name('kelola-pesanan');

    Route::resource('product', AdminProductController::class);

    Route::resource('product-gallery', ProductGalleryController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('user', UserController::class);

    Route::resource('banner', BannerController::class);
});

require __DIR__ . '/auth.php';
