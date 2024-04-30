<?php

use App\Livewire\Login;
use App\Livewire\Pasien\Dashboard as PasienDashboard;
use App\Livewire\Register;
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

Route::view('/', 'welcome')->name('home');
Route::get('/login', Login::class);
Route::get('/register', Register::class);

Route::get('/pasien/dashboard', PasienDashboard::class);
