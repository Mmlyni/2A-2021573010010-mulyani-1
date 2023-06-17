<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/view', function () {
    return view('pora/Home');
});

Route::get('/Login', function () {
    return view('pora/login');
});

Route::get('/Lo', function () {
    return view('PestaPora/index');
});

Route::get('/o', function () {
    return view('PestaPora/Toko');
});

Route::get('/w', function () {
    return view('PestaPora/projects');
});

Route::get('/q', function () {
    return view('PestaPora/orderp');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');