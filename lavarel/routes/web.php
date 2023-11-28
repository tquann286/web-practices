<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveSearchController;

Route::get('/', [LiveSearchController::class, 'index']);
Route::get('/action', [LiveSearchController::class, 'action'])->name('action');