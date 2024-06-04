<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;


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
    return view('livewire.dashboard.index');
});

Route::get('/login', function () {
    return view('livewire.auth.login');
});
Route::get('/register', function () {
    return view('livewire.auth.register');
});
Route::get('/forgot-password', function () {
    return view('livewire.auth.forgot-password');
});

