<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
Route::get('/home', [AdminController::class, 'index']);
Route::get('/categories', [WebsiteController::class, 'categories'])->name('website.categories');
Route::get('/categories/{category_id}', [WebsiteController::class, 'getSingleCategory'])->name('website.categories.show');
Route::get('/books', [WebsiteController::class, 'books'])->name('website.books');
Route::get('/books/{book_id}', [WebsiteController::class, 'getSingleBook'])->name('website.books.show');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('website.blog');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/service', [WebsiteController::class, 'service'])->name('website.service');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
require __DIR__ . '/panel.php';


