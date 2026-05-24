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

// --Category--
Route::prefix('admin')->name('admin.')->group(function(){ 
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except(['show']); // Volledige beheer
    //Route::get('/categories/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categories.create');
    //Route::post('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('categories.store');
    //Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
    //Route::get('/categories/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('categories.edit');
    //Route::put('/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categories.update');
    //Route::delete('/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categories.delete');
    Route::resource('faqs',\App\Http\Controllers\Admin\FaqController::class)->except(['show']);


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
