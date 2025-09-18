<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get("/", [GeneralController::class, "home"])->name("home");

Route::get("/about", [GeneralController::class, "about"])->name("about");

Route::get("/contacts", [GeneralController::class, "contacts"])->name("contacts");