<?php

use App\Http\Controllers\{
    ProfileController,
    UserController,
    DashboardController,
    RoleController,
    NotificationController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('roles', RoleController::class); 
    Route::get('/{role}/permissions', [RoleController::class, 'permission'])->name('permissions.index');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    
    Route::get('/user/profile', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/balance', [UserController::class, 'balance'])->name('users.balance');
    Route::get('/user/deposit', [UserController::class, 'deposit'])->name('users.deposit');
    Route::get('/user/withdraw', [UserController::class, 'withdraw'])->name('users.withdraw');
    Route::get('/user/password', [UserController::class, 'password'])->name('users.password');
    Route::get('/user/app-settings', [UserController::class, 'appsettings'])->name('users.appsettings');

});

require __DIR__.'/auth.php';
