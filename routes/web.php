<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BurialRecordController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\CleaningRequestController;
use App\Http\Controllers\PlotTransferController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('cemetery.home');
})->name("home");

Route::resource('cleanings', CleaningRequestController::class);
Route::resource('burials', BurialRecordController::class);
Route::resource('plots', PlotController::class);

Route::get('transfers', [PlotTransferController::class, 'index'])->name('transfers.index');
Route::get('transfers/create', [PlotTransferController::class, 'create'])->name('transfers.create');
Route::post('transfers', [PlotTransferController::class, 'store'])->name('transfers.store');
Route::get('transfers/{transfer}', [PlotTransferController::class, 'show'])->name('transfers.show');