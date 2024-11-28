<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'indexData'])->name('clients.index');

Route::get('movies/create', [MovieController::class, 'createData'])->name('clients.create');
Route::post('movies/store', [MovieController::class, 'storeData'])->name('clients.store');
Route::delete('movies/delete/{movie}',[MovieController::class,'deleteData'])->name('clients.delete');
