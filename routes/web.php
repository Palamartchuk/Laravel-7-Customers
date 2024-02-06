<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('customers.index');
});

// Customer management
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::patch('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
