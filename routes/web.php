<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penjelasansingkat', function () {
    return view('penjelasansingkat.penjelasansingkat');
});

Route::get('/detail_penjelasan', function () {
    return view('penjelasansingkat.detailpenjelasan');
});

Route::get('/gismpj', function () {
    return view('gismpj.gismpj');
});


Route::get('/contactus', function () {
    return view('contactus.contactus');
});

Route::get('/pemesanan', function () {
    return view('pemesanan.pemesanan');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/penjelasangism', function () {
    return view('penjelasangism.penjelasangism');
});

require __DIR__.'/auth.php';
