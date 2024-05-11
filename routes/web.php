<?php

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\LinkToDetailController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Main');
})->name('main');


Route::get('/registry_test', function () {
    return view('auth.testregister');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/reportPhoto', function(){
    return view('ReportPhoto');
})->name('report_photo');



Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('homeAdmin');

    Route::resource('detail', DetailController::class);
    Route::resource('link_to_detail', LinkToDetailController::class);
    Route::resource('content', ContentController::class);
});

require __DIR__.'/auth.php';

