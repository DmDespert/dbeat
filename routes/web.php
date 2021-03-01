<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/',
    [ProductController::class, 'index']
);

Route::get('/product', function () {
    return view('product');
});

Route::get('/product/{id}',
    [ProductController::class, 'show']
);

Route::get('/category',
    [CategoryController::class, 'index']
);

Route::get('/category/{id}',
    [CategoryController::class, 'show']
);
