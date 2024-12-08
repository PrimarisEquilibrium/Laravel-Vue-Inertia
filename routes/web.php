<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::inertia("/", "Home")->name("home");

Route::inertia("register", "Auth/Register")->name("register");
Route::post("register", [AuthController::class, "register"]);