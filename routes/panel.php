<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');


Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('/', function(){
        return redirect()->route('admin.dashboard');

    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
