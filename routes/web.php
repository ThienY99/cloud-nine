<?php

use Illuminate\Support\Facades\Route;


// Publieke sectie
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

// --Category--
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

// --Faqs--
Route::get('/faqs', [\App\Http\Controllers\FaqController::class, 'index'])->name('faqs.index');


// Admin pages
Route::prefix('admin')->middleware('auth', \App\Http\Middleware\IsAdmin::class)->name('admin.')->group(function () {
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except(['show']);
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class)->except(['show']);
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class)->except(['show']);

    

});


// User login
Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Authenticatie
require __DIR__.'/auth.php';
