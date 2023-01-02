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
    Route::get('/product',[ProductController::class, 'all_products'])->name('product.page');

    // Products
    Route::get('/products/add', function() {
        return view('product.add');
    })->name('add.product.page');
    Route::post('/products/add', [ProductController::class, 'add_product'])->name('add.product');
    Route::get('/products/{id}', [ProductController::class, 'retrieve_product'])->name('edit.product.page');
    Route::put('/products', [ProductController::class, 'update_product'])->name('edit.product');
    // Route::delete('/products/delete', [ProductController::class, 'delete_product'])->name('delete.product');

    // Logout
    Route::get('/logout', [EmployeeController::class, 'logout'])->name('logout');
});



