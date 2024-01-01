<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

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

Route::get('/{post}/edit',[PostsController::class, 'edit'])->name('posts.edit');
Route::put('/{post}/update',[PostsController::class, 'update'])->name('posts.update');
Route::delete('/{post}/delete',[PostsController::class, 'destroy'])->name('posts.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//alleen admins kan deze route gebruiken
Route::middleware('auth.admin')->group(function(){
    Route::get('/users', [ProfileController::class, 'show'])->name('users.show');
    Route::put('/users/{user}/makeAdmin', [ProfileController::class, 'makeAdmin'])->name('users.makeAdmin');
});

//contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//Admin answeRS
Route::get('/message', [ContactController::class, 'showMessage'])->name('message');
//todo post voor admin antwoord


//about
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/create',[PostsController::class, 'create'])->name('posts.create');
    Route::post('/',[PostsController::class, 'store'])->name('posts.store');
});

require __DIR__.'/auth.php';
