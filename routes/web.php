<?php

use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\PartyController;
use App\Http\Controllers\AdminController\PaymentPendingController;
use App\Http\Controllers\GuestController\ReservationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController\GuestDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/test',function(){
    return view('/pages/admin/partial/edit');
});



Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/appointments',[PaymentPendingController::class, 'index'])->name('admin.appointment');
 
    Route::get('/pending-parties',[PartyController::class, 'index'])->name('admin.pending-parties');

    Route::get('/reservation/{guestId}/edit',[PaymentPendingController::class, 'edit'])->name('admin.reservation-edit');
   

});

Route::prefix('guest')->middleware(['auth', 'role:guest'])->group(function(){

    Route::get('/dashboard',[GuestDashboardController::class, 'index'])->name('guest.dashboard');

    Route::post('/date/request', [ReservationController::class, 'post'])->name('guest.date.request');

    Route::get('/reservations', [ReservationController::class, 'index'])->name('guest.reservations');
    Route::post('/reservations/store', [ReservationController::class, 'store'])->name('guest.reservations.store');
 
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
