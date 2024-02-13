<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

// page routes
Route::get("/dashboard",[DashboardController::class,'index']);
Route::get("/dashboard/comapnies",[DashboardController::class,'comapnies']);
Route::get("/dashboard/jobs",[DashboardController::class,'jobs']);
Route::get("/dashboard/employees",[DashboardController::class,'employees']);
Route::get("/dashboard/blogs",[DashboardController::class,'blogs']);
Route::get("/dashboard/pages",[DashboardController::class,'pages']);
Route::get("/dashboard/plugins",[DashboardController::class,'plugins']);
