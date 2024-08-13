<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'login'])->name('auth.login');
