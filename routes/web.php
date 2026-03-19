<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KPIController;
use App\Http\Controllers\NoBidController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

Route::middleware(["auth"])->group(function () {
    Route::get('/', function () {
        return redirect()->route('kpi');
    });

    Route::controller(KPIController::class)->group(function () {
        Route::get('/kpi', 'index')->name('kpi');
    });

    Route::controller(TopController::class)->group(function () {
        Route::get('/top', 'index')->name('top');
    });

    Route::controller(NoBidController::class)->group(function () {
        Route::get('/no-bid', 'index')->name('no-bid');
    });

    Route::controller(\App\Http\Controllers\GraphController::class)->group(function () {
        Route::get('/graph', 'index')->name('graph');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get("login", "showLogin")->name("login");
    Route::post("login", "login")->name("login");
    Route::middleware(["auth"])->group(function () {
        Route::delete("uitloggen", "uitloggen")->name("uitloggen");
        Route::get("uitloggen", "uitloggen")->name("uitloggen");
    });
});
