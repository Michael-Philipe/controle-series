<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store', 'destroy']);

// Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy');

// Route::controller(SeriesController::class)->group(function(){
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::post('/series/salvar', 'store')->name('series.store');
// });

