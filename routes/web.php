<?php

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

Route::get('/switch-lang/{lang}', [App\Http\Controllers\LanguageController::class, 'Index'])->name('website-switch-lang');
Route::middleware(['locale'])->group(function () {
	Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index'])->name('home');
	Route::get('/category', [App\Http\Controllers\website\CategoryController::class, 'index'])->name('category');

    Route::any('{any}', function ($any) {
        if (strpos($any, '/') === 0) {
            return response()->view('website::pages.not-found.index ');
        }
        return response()->view('website::pages.not-found.index ');
        abort(404, 'Page not found');
    })->where('any', '^(?!admin\/).*');
});
