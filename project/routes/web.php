<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PostsController::class, 'index'])->name('home');
Route::get('/create',[PostsController::class, 'create'])->name('posts.create');
Route::post('/',[PostsController::class, 'store'])->name('posts.store');
Route::get('/{post}/edit',[PostsController::class, 'edit'])->name('posts.edit');
Route::put('/{post}/update',[PostsController::class, 'update'])->name('posts.update');
Route::delete('/{post}/delete',[PostsController::class, 'destroy'])->name('posts.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
