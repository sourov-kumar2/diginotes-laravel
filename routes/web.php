<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/*
|--------------------------------------------------------------------------
| Routes for notes
|--------------------------------------------------------------------------
|
*/
Route::get('/notes-create', [NotesController::class, 'create'])->name('notes.add');
Route::get('/notes-manage', [NotesController::class, 'index'])->name('notes.manage');
Route::post('/notes-store', [NotesController::class, 'store'])->name('notes.store');


/*
|--------------------------------------------------------------------------
| Routes for categories
|--------------------------------------------------------------------------
|
*/
Route::get('/add-category', [CategoryController::class, 'create'])->name('category.add');
Route::get('/manage-category', [CategoryController::class, 'index'])->name('category.manage');
Route::post('/store-category', [CategoryController::class, 'store'])->name('category.store');

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';

