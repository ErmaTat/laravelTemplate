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
    Route::put('/{role}/permissions/update', [RoleController::class, 'updpermission'])->name('permissions.update');
    Route::delete('/{role}/permissions/remove', [RoleController::class, 'rempermission'])->name('permissions.remove');


    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications', [NotificationController::class, 'send'])->name('notifications.send');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::patch('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    

    Route::get('/user/profile', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/user/restore/{id}', [UserController::class, 'restore'])->name('users.restore');


    Route::get('/user/balance', [UserController::class, 'balance'])->name('users.balance');
    Route::get('/user/deposit', [UserController::class, 'deposit'])->name('users.deposit');
    Route::get('/user/withdraw', [UserController::class, 'withdraw'])->name('users.withdraw');

    Route::get('/user/password', [UserController::class, 'password'])->name('users.password');
    Route::put('/user/password/update/{id}', [UserController::class, 'updatepassword'])->name('password.update');

    Route::get('/user/two-factor', [UserController::class, 'twofactor'])->name('users.twofactor');
    Route::get('/user/app-settings', [UserController::class, 'appsettings'])->name('users.appsettings');

});

require __DIR__.'/auth.php';
