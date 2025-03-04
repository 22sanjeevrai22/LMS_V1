<?php

use App\Http\Controllers\panel\BookController;
use App\Http\Controllers\panel\BorrowController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\DashboardController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}/update', [BookController::class, 'update'])->name('books.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::get('/borrow', [BorrowController::class, 'index'])->name('panel.borrow');
    Route::get('/borrow/{borrow}/approve', [BorrowController::class, 'approve'])->name('borrow.approve');
    Route::get('/borrow/{borrow}/return', [BorrowController::class, 'return'])->name('borrow.return');
    Route::get('/borrow/{borrow}/reject', [BorrowController::class, 'reject'])->name('borrow.reject');
    Route::delete('/borrow/{borrow}', [BorrowController::class, 'destroy'])->name('borrow.destroy');



});
