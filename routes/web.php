<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\PsController;
use App\Http\Controllers\BoozeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ContactController;

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

Route::prefix('dev')->group(function () {
    Route::get('/stack', [DevController::class, 'stack'])->name('stack');
    Route::get('/references', [DevController::class, 'references'])->name('references');
});

Route::prefix('ps')->group(function () {
    Route::get('/consoles', [PsController::class, 'consoles'])->name('consoles');
    Route::get('/games', [PsController::class, 'games'])->name('games');
});

Route::get('/booze', [BoozeController::class, 'index'])->name('booze');

Route::get('/music', [MusicController::class, 'index'])->name('music');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
