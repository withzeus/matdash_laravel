<?php

use App\Http\Controllers\Core\HomeController;
use App\Http\Controllers\Core\SettingController;
use Illuminate\Support\Facades\Route;

Route::prefix("home")->group(function() {
    Route::get("/", [HomeController::class, "index"])->name("home");
});

Route::prefix("settings")->name("settings.")->group(function() {
    Route::get("/theme", [SettingController::class, "theme"])->name("theme");
});
