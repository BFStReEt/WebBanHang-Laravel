<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\Moveone;

Route::get('admin/users/login', [LoginController::class, 'index']);
Route::get('admin/users/nothing', [Moveone::class, 'haha']);
