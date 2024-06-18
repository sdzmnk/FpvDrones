<?php

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\DroneController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LinkToDetailController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderLineController;
use App\Http\Controllers\Admin\PhotoToGalleryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportPhotoController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Content;
use App\Models\Detail;
use App\Models\Instruction;
use App\Models\ModelHasRole;


Route::get('/', [MainController::class, 'index'])->name('main');
Route::post('/save-selected-details',  [MainController::class, 'saveSelectedDetails']);

Route::resource('instruction', App\Http\Controllers\InstructionController::class );



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'] )->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('report_photo', ReportPhotoController::class);

Route::prefix('admin_panel')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('homeAdmin');
        Route::resource('detail', DetailController::class);
        Route::resource('link_to_detail', LinkToDetailController::class);
        Route::resource('content', ContentController::class);
        Route::resource('drone', DroneController::class);
        Route::resource('user', UserController::class);
        Route::resource('instruction_admin', App\Http\Controllers\Admin\AdminInstructionController::class)->parameters(['instruction_admin' => 'instruction']);
        Route::resource('instruction_step', App\Http\Controllers\Admin\InstructionStepController::class);
        Route::resource('order', OrderController::class);
        Route::resource('order_line', OrderLineController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('photo_to_gallery', PhotoToGalleryController::class);
    });
});



require __DIR__.'/auth.php';

