<?php

use App\Http\Controllers\CustomerReceiptController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Models\CustomerReceipt;
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
        Route::get('/', [ProductController::class, 'render_data'])->name('product.page');
        Route::post('/', [ProductController::class, 'add_product'])->name('add.product');
        Route::put('/', [ProductController::class, 'update_product'])->name('edit.product');
    });

    Route::prefix('receipt')->group(function () {
        Route::get('/add-test', function () {
            return view('receipt.add');
        });
        Route::get('/', [CustomerReceiptController::class, 'render_data'])->name('receipt.page');
        Route::get('/{id}')->name('edit.receipt.page');
        Route::post('/', [CustomerReceiptController::class, 'create_customer_receipt'])->name('add.receipt');
        Route::put('/', [CustomerReceiptController::class, 'edit_customer_information_in_receipt'])->name('edit.receipt');
        Route::delete('/',[CustomerReceiptController::class, 'delete_customer_receipt'])->name('delete.receipt');
    });

    // Logout
    Route::get('/logout', [EmployeeController::class, 'logout'])->name('logout');
});
