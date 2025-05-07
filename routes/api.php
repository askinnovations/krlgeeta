<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;

     
    
// Public route for mobile login
Route::post('/admin/api-login', [LoginController::class, 'apiLogin']);




