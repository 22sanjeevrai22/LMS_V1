<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/dashboard', function () {
    return redirect()->route('dashboard');
})->name('dashboard');


Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('/', function(){
        return redirect()->route('dashboard');

    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/{id?}', [CategoryController::class, 'index'])->name('category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
