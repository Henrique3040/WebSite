<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FAQAnswersController;
use App\Http\Controllers\EditFAQController;

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



Route::get('/FAQsPage',[FAQController::class, 'index'])->name('FAQ');

//alleen admins kan deze route gebruiken
Route::middleware('auth.admin')->group(function(){

    Route::get('/users', [ProfileController::class, 'show'])->name('users.show');
    Route::put('/users/{user}/makeAdmin', [ProfileController::class, 'makeAdmin'])->name('users.makeAdmin');
    Route::get('/FAQ_Admin',[FAQController::class, 'adminPage'])->name('FAQ_Admin');
    Route::post('/FAQ_Admin',[FAQController::class, 'store'])->name('FAQ.store');
    Route::put('/FAQ_Admin/{FAQ}',[FAQController::class, 'update'])->name('FAQ.update');

    Route::post('/FAQ', [FAQAnswersController::class, 'store'])->name('FAQAnswers.store');
    Route::delete('/FAQ/{id}', [FAQAnswersController::class, 'destroy'])->name('FAQAnswers.destroy');
    
    Route::put('/FAQ/{answer}',[FAQAnswersController::class, 'update'])->name('FAQAnswers.update');
    Route::get('/FAQ', [FAQAnswersController::class, 'edit'])->name('FAQAnswers.edit');
    Route::delete('/{FAQ}/FAQ', [FAQController::class, 'destroy'])->name('FAQ.destroy');

    Route::get('/editFAQ/{FAQ}', [EditFAQController::class, 'index'])->name('editFAQ');

});

//contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/message', [ContactController::class, 'showMessage'])->name('message');


//about
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/profile', [ProfileController::class, 'confirmDeletion'])->name('confirm.user.deletion');


    Route::get('/create',[PostsController::class, 'create'])->name('posts.create');
    Route::post('/',[PostsController::class, 'store'])->name('posts.store');

    Route::get('/{post}/edit',[PostsController::class, 'edit'])->name('posts.edit');
    Route::put('/{post}/update',[PostsController::class, 'update'])->name('posts.update');
    Route::delete('/{post}/delete',[PostsController::class, 'destroy'])->name('posts.destroy');
});

require __DIR__.'/auth.php';
