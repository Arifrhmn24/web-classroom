<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\registercon;
use App\Http\Controllers\usercon;
use App\Http\Controllers\soalcon;
use App\Http\Controllers\nilaicon;

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

Route::get('/', [LoginCon::class, 'login'])->name('login');
Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardCon::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [registercon::class, 'register'])->name('register');
Route::post('register/action', [registercon::class, 'actionregister'])->name('actionregister');
Route::get('user', [usercon::class, 'index'])->name('user')->middleware('auth');
Route::get('/user/delete/{id}', [usercon::class, 'delete'])->name('deleteUser')->middleware('auth');
Route::get('soal', [soalcon::class, 'index'])->name('soal')->middleware('auth');
Route::get('/soal/delete/{id}', [soalcon::class, 'delete'])->name('deleteSoal')->middleware('auth');
Route::post('/soal/storeinput', [soalcon::class, 'storeinput'])->name('storeInputSoal')->middleware('auth');
Route::get('/soal/update/{id}', [soalcon::class, 'update'])->name('updateSoal')->middleware('auth');
Route::post('/soal/storeupdate', [soalcon::class, 'storeupdate'])->name('storeUpdateSoal')->middleware('auth');
Route::get('nilai', [nilaicon::class, 'index'])->name('nilai')->middleware('auth');
Route::post('/nilai/storeupdate', [nilaicon::class, 'storeupdate'])->name('storeUpdateNilai')->middleware('auth');
Route::post('/nilai/storeinput', [nilaicon::class, 'storeinput'])->name('storeInputSoal')->middleware('auth');
