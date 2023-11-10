<?php

use App\Http\Controllers\Admin\Admin_Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InvoiceController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware('IsAdmin')->group(function (){
        Route::view('/' , 'admin.index')->name('index');
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserController::class, 'store']);
        Route::resource('admin', \App\Http\Controllers\Admin\AdminController::class);
        Route::resource('invoices', \App\Http\Controllers\Admin\InvoiceController::class);
        Route::resource('customers', \App\Http\Controllers\Admin\CustomerController::class);
        Route::resource('accounts', \App\Http\Controllers\Admin\AccountController::class);
        Route::resource('models', \App\Http\Controllers\Admin\MdlController::class);
        Route::resource('cash_movement', \App\Http\Controllers\Admin\MdlController::class);


        Route::get('customer_invoices', \App\Livewire\Admin\CustomerInvoices::class);


    });

    require __DIR__.'/admin_auth.php';

});


