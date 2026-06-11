<?php

use App\Http\Controllers\Core\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix("home")->group(function() {
    Route::get("/", [HomeController::class, "index"])->name("home");
});

Route::prefix("setting")->group(function() {
    
});
