<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['employee_id' => Auth::user()->employee_id]);
})->middleware(['auth'])->name('/');

Route::get('/wages', function () {
    return view('wages');
})->middleware(['auth'])->name('/wages');

Route::get('/shifts', function () {
    return view('shifts-list');
})->middleware(['auth'])->name('/shifts');

Route::get('/shift/{id}/edit', function () {
    return view('shift-edit');
})->middleware(['auth'])->name('/shifts');

Route::get('/shifts/new', function () {
    return view('shift-create');
})->middleware(['auth'])->name('/shifts');

Route::controller(App\Http\Controllers\Auth\RegisteredUserController::class)->group(function () {
    Route::get('/profile', 'fetch')->middleware(['auth'])->name('/user');
    Route::get('/profile/update', 'update')->middleware(['auth'])->name('/user');
});

require __DIR__.'/auth.php';
