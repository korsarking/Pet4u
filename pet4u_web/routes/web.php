<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AuthController;

Route::get("/", [GeneralController::class, "home"])->name("home");

Route::get("/about", [GeneralController::class, "about"])->name("about");

Route::get("/contacts", [GeneralController::class, "contacts"])->name("contacts");

Route::get("/login", [AuthController::class, "login"])->name("login");

Route::get("/register", [AuthController::class, "register"])->name("register");

Route::post("/login", [AuthController::class, "loginPost"])->name("loginPost");

Route::post("/register", [AuthController::class, "registerPost"])->name("registerPost");

Route::post('/logout', [AuthController::class, 'logoutPost'])->name('logout');