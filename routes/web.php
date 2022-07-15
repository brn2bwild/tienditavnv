<?php

use App\Http\Controllers\ReservacionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
  return redirect()->route('reservaciones.create');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  Route::get('/admin', function () {
    return view('admin.dashboard');
  })->name('admin.index');
  
  Route::get('/adminreservaciones', function() {
    return view('admin.reservaciones.index');
  })->name('adminreservaciones.index');
  
  Route::get('/areas', function() {
    return view('admin.areas.index');
  })->name('adminareas.index');
  
  Route::get('/adminperfil', function() {
    return view('profile.show');
  })->name('adminperfil.index');
});

Route::get('/reservaciones', [ ReservacionController::class, 'create' ])->name('reservaciones.create');
Route::post('/reservaciones', [ ReservacionController::class, 'store' ])->name('reservaciones.store');

