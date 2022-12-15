<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [ForumController::class, 'index'])->name('dashboard');

    Route::get('/create', [ForumController::class, 'create'])->name('create');
    Route::post('/create', [ForumController::class, 'store'])->name('store');
    Route::get('/posts/{user}', [ForumController::class, 'userPosts'])->name('userPosts');
    Route::post('/edit/{id}', [ForumController::class, 'edit'])->name('edit');
    Route::post('/posts/edit/{id}', [ForumController::class, 'editPost'])->name('editPost');
    Route::delete('/posts/delete/{id}', [ForumController::class, 'deletePost'])->name('deletePost');
});

require __DIR__.'/auth.php';
