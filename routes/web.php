<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/', [WebsiteController::class, 'home']);
Route::get('/home', [AdminController::class, 'index']);


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
require __DIR__ . '/panel.php';


