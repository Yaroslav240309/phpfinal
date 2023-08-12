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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/catalog', function () {
    return view('pages.catalog');
});


Route::get('/logout' , function () { 
    Auth::logout(); 
    return view('home'); 
});



















Route::get('/chemp', function () {
    return view('pages.chemp');
});

Route::get('/carhartt', function () {
    return view('pages.carhartt');
});

Route::get('/onenine', function () {
    return view('pages.onenine');
});

Route::get('/Young', function () {
    return view('pages.Young');
});

Route::get('/A-Store', function () {
    return view('pages.A-Store');
});

Route::get('/MINAKU', function () {
    return view('pages.MINAKU');
});

Route::get('/DOLCE & GABBANA', function () {
    return view('pages.DOLCE & GABBANA');
});

Route::get('/Off-White', function () {
    return view('pages.Off-White');
});

Route::get('/Stone Island', function () {
    return view('pages.Stone Island');
});

Route::get('/Stussy', function () {
    return view('pages.Stussy');
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
