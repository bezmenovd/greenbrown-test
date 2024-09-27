<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::post('/switch-theme', [PageController::class, 'switchTheme'])->name('switch-theme');
