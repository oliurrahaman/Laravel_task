<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CodingTestController;

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

Route::get('/', [CodingTestController::class,'index'])->name('home');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {


Route::resource('category', CategoryController::class);
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::middleware('admin')->group(function(){

    Route::resource('product', ProductController::class);
    Route::get('/product/update-product/{id}',[ProductController::class, 'update'])->name('product.update-product');
     Route::get('/product/products-export',[ProductController::class, 'export'])->name('products.export');
    Route::post('/product/products-import',[ProductController::class, 'import'])->name('products.import');
});

});
