<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'Cache is cleared';
});

Route::prefix('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin-login');
    });
    
    Route::get('/login', [App\Http\Controllers\Admin\UserController::class, 'login'])->name('login');
    Route::post('/login/post', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login-post');
    Route::get('/sign-out', [App\Http\Controllers\Admin\AuthController::class, 'signOut'])->name('sign-out');
});

Route::middleware(['AdminGuard', 'locale',])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::prefix('settings')->name('setting-')->group(function () {

        Route::prefix('permission')->name('permission-')->group(function () {
            Route::get('/list', [App\Http\Controllers\Admin\PermissionController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\PermissionController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [App\Http\Controllers\Admin\PermissionController::class, 'edit'])->name('edit');
            Route::delete('/{id}/delete', [App\Http\Controllers\Admin\PermissionController::class, 'delete'])->name('delete');
        });

        Route::get('/', [App\Http\Controllers\Admin\PermissionController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\PermissionController::class, 'onEdit'])->name('edit');
        Route::get('/edit/{slug}', [App\Http\Controllers\Admin\PermissionController::class, 'onEdit'])->name('edit');
        Route::get('/permission/{slug}', [App\Http\Controllers\Admin\PermissionController::class, 'userPermission'])->name('permission');
        Route::post('/permission/save', [App\Http\Controllers\Admin\PermissionController::class, 'onSavePermission'])->name('permission-save');
    });


    Route::any('{any}', function ($any) {
        if (strpos($any, 'admin/') === 0) {
            abort(404, 'Admin page not found');
        }
        abort(404, 'Page not found');
    })->where('any', '^(?!admin\/).*');
});
