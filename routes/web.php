<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/send-email', [EmailController::class, 'send'])->name('send-email');
