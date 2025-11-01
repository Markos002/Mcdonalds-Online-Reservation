<?php

use App\Http\Controllers\GuestController\ReservationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/test',function(){
    return view('pages.test');
});

Route::prefix('admin')->middleware('role:admin')->group(function(){
    Route::get('/dashboard', function () {
        return view('/pages/admin/dashboard');
    })->name('admin.dashboard');
    Route::get('/appointment', function () {
        return view('/pages/admin/appointment');
    })->name('admin.appointment');
    Route::get('/pending-parties', function () {
        return view('/pages/admin/pendingparties');
    })->name('admin.pending-parties');
});

Route::prefix('guest')->middleware('role:guest')->group(function(){
    Route::get('/dashboard', function () {
        return view('/pages/guest/dashboard');
    })->name('guest.dashboard');

    Route::get('reservation', [ReservationController::class, 'index']);
    Route::post('/reserve', [ReservationController::class, 'store'])->name('guest.reserve');
 
    Route::get('/confirmation',function(){
        return view('pages.confirmation');
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destrogit y'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
