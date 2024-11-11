<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\LoginController;

Route::Resource("publication", PublicationController::class);
Route::get("/dashboard", [DashboardController::class,"index"])->middleware('auth')->name("dashboard.index");
Route::get("login", [LoginController::class,"index"])->name("login");
Route::post("login", [LoginController::class,"login"])->name("login.store");
Route::get("logout", [LoginController::class,"logout"])->name("logout");