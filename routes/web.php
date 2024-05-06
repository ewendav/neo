<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//landing index
Route::get('/', [\App\Http\Controllers\BaseController::class, 'index'])->name('index');
//shop page collection
route::get('/shop/{collectionName}', [\App\Http\Controllers\BaseController::class, 'shop'])->name('shop');

// livewire breeze --------------------------------------------------------------------------

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
require __DIR__.'/auth.php';
