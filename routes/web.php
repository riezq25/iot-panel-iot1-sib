<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LedController;
use App\Http\Controllers\SaklarController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\UserController;
use App\Models\Temperature;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/dokumentasi', 'dokumentasi')->name('dokumentasi');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->name('user');
});
Route::controller(DeviceController::class)->group(function () {
    Route::get('/device', 'index')->name('device');
});
Route::controller(SaklarController::class)->group(function () {
    Route::get('/saklar', 'index')->name('saklar');
    Route::get('/custom/{code}', 'custom')->name('custom');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('login');
});

Route::controller(TemperatureController::class)->group(function () {
    Route::get('/temperature', 'index')->name('temperature');
});

Route::controller(LedController::class)->group(function () {
    Route::get('/leds', 'index')->name('led.index');
    Route::post('/leds', 'store')->name('led.store');
});

