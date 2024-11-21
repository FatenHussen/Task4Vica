<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;


// Welcome Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication Routes
require __DIR__ . '/auth.php';


// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Add this line


    Route::resource('posts', PostController::class)->except(['index']);
    Route::resource('comments', CommentController::class)->only(['store']);
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Categories Management
    Route::resource('/admin/categories', CategoryController::class);

    // Tags Management
    Route::resource('/admin/tags', TagController::class);

    // View all posts
    Route::get('/admin/posts', [AdminController::class, 'allPosts'])->name('admin.posts');
});

    