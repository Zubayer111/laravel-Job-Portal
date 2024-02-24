<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\CompanyController;

// dashboard page routes
Route::get("/dashboard",[DashboardController::class,'index']);
Route::get("/dashboard/comapnies",[DashboardController::class,'comapnies']);
Route::get("/dashboard/addCompanieForm",[DashboardController::class,'addCompanieForm']);
Route::get("/dashboard/jobs",[DashboardController::class,'jobs']);
Route::get("/dashboard/addJobForm",[DashboardController::class,'addJobForm']);
Route::get("/dashboard/employees",[DashboardController::class,'employees']);
Route::get("/dashboard/addEmploye",[DashboardController::class,'addEmploye']);
Route::get("/dashboard/blogs",[DashboardController::class,'blogs']);
Route::get("/dashboard/addBlog",[DashboardController::class,'addBlog']);
Route::get("/dashboard/pages",[DashboardController::class,'pages']);
Route::get("/dashboard/plugins",[DashboardController::class,'plugins']);

// end dashboard page routes

// frontend routes
Route::get("/",[HomeController::class,'homePage']);
Route::get("/Job-Page",[HomeController::class,'jobPage']);
Route::get("/Job-detail-Page",[HomeController::class,'jobDetailsPage']);
Route::get("/about-Page",[HomeController::class,'aboutPage']);
Route::get("/Contact-Page",[HomeController::class,'contactPage']);
Route::get("/login-page",[HomeController::class,'loginPage']);
Route::get("/registration-page",[HomeController::class,'registrationPage']);
Route::get("/blog-page",[HomeController::class,'blogPage']);
Route::get("/blog-details-page",[HomeController::class,'blogDetailsPage']);
Route::get("/company-apply-page",[HomeController::class,'companyPage']);
// end frontend routes

// auth routes
Route::post("/login",[AuthController::class,'login'])->name("login");
Route::post("/register",[AuthController::class,'register'])->name("register");
Route::post("/logout",[AuthController::class,'logout'])->name("logout");
// end auth routes

// companie routes
Route::post("/add-companie",[CompanyController::class,'addCompanie'])->name("addCompanie");
// end companie routes