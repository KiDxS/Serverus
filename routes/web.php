<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
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

Route::post('/', [EmployeeController::class, 'login'])->name('auth');

Route::get('/', function () {
    return view('login');
})->name('login');


// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('product')->group(function () {
        // /product
        Route::get('/', [ProductController::class, 'all_products'])->name('product.page');
        Route::post('/', [ProductController::class, 'add_product'])->name('add.product');
        Route::put('/', [ProductController::class, 'update_product'])->name('edit.product');
        // /product/id
        Route::get('/{id}', [ProductController::class, 'retrieve_product'])->name('edit.product.page');

    });


    // Logout
    Route::get('/logout', [EmployeeController::class, 'logout'])->name('logout');
});
