<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlotController;




Route::get('/dashboard', [
    DashboardController::class,
    'index'
])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::resource('plots', PlotController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/plot-management', function () {
    return view('plot-management');
})->name('plot-management');

Route::get('/occupied-plot', function () {
    return view('occupied-plot');
})->name('occupied-plot');

Route::get('/available-plot', function () {
    return view('available-plot');
})->name('available-plot');

Route::get('/burial-records', function () {
    return view('burial-records');
})->name('burial-records');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('layouts.admin');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
