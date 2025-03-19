<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('paypal', [PaypalController::class, 'paypal'])->name('paypal');