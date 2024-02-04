<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

/* Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('dev')->group(function () {
    Route::get('/stack', [DevController::class, 'stack'])->name('stack');
    Route::get('/references', [DevController::class, 'references'])->name('references');
});

Route::prefix('ps')->group(function () {
    Route::get('/consoles', [PsController::class, 'consoles'])->name('consoles');
    Route::get('/games', [PsController::class, 'games'])->name('games');
});

Route::get('/booze', [BoozeController::class, 'index'])->name('booze');

Route::get('/music', [MusicController::class, 'index'])->name('music'); */

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/stack', [MainController::class, 'stack'])->name('stack');

Route::get('/references', [MainController::class, 'references'])->name('references');

Route::get('/cv', [MainController::class, 'cv'])->name('cv');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
