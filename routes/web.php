<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/*
|--------------------------------------------------------------------------
| 12/18/2023
Accesing data within my models
|--------------------------------------------------------------------------

*/
$product = new Product();

Route::get('/create',  [ProductController::class, 'createProduct' ]);

Route::get('/admin', function (){
    return view('adminpage');
});

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/checkout', function() {
    return view('checkout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

