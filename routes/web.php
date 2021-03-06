<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

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

Route::get('/',
    [ProductController::class, 'index']
);

Route::get('/products/{product}',
    [ProductController::class, 'show']
);

Route::get('/categories',
    [CategoryController::class, 'index']
);

Route::get('/categories/{category}',
    [CategoryController::class, 'show']
);

Route::get('/cart',
    [CartController::class, 'index']
)->name('cart.index');

Route::post('add-to-cart/{product}',
    [CartController::class, 'store']
)->name('cart.store');

Route::patch('update-cart/{product}',
    [CartController::class, 'update']
)->name('cart.update');

Route::delete('remove-from-cart/{product}',
    [CartController::class, 'destroy']
)->name('cart.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
