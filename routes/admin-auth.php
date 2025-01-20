<?php

use App\Http\Controllers\Admin\Auth\Logincontroller;

use App\Http\Controllers\Admin\Auth\RegisteredUserController;

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('admin.register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [Logincontroller::class, 'create']);

    Route::post('login', [Logincontroller::class, 'store']) ->name('admin.login');
;
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
  Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::post('logout', [Logincontroller::class, 'destroy'])
                ->name('admin.logout');
});
