<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/quizzes',[QuizController::class, 'index'])->name('quizzes.index');

Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');

Route::post('/quizzes/create', [QuizController::class, 'createQuiz'])->name('quizzes.createQuiz');

// クイズ削除
Route::get('/quizzes/delete/{id}', [QuizController::class, 'destroy'])->name('quizzes.destroy');
Route::delete('/quizzes/delete/{id}', [QuizController::class, 'destroy'])->name('quizzes.destroy');
