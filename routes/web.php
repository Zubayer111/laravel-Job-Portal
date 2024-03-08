<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JobCatagoryController;
use App\Http\Controllers\Frontend\CandidateController;
use App\Models\Candidate;

// dashboard page routes
Route::get("/dashboard",[DashboardController::class,'index']);
Route::get("/dashboard/comapnies",[DashboardController::class,'comapnies']);
Route::get("/dashboard/addCompanieForm",[DashboardController::class,'addCompanieForm']);
Route::get("/dashboard/jobs-catagory",[DashboardController::class,'jobsCatagory']);
Route::get("/dashboard/addJobCatagoryForm",[DashboardController::class,'addJobCatagoryForm']);
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
Route::get("/Job-detail-Page/{job}",[HomeController::class,'jobDetailsPage']);
Route::get("/about-Page",[HomeController::class,'aboutPage']);
Route::get("/Contact-Page",[HomeController::class,'contactPage']);
Route::get("/login-page",[HomeController::class,'loginPage']);
Route::get("/registration-page",[HomeController::class,'registrationPage']);
Route::get("/blog-page",[HomeController::class,'blogPage']);
Route::get("/blog-details-page",[HomeController::class,'blogDetailsPage']);
Route::get("/company-apply-page",[HomeController::class,'companyPage']);
Route::get("/profile-page",[HomeController::class,'profilePage']);
// end frontend routes

// auth routes
Route::post("/login",[AuthController::class,'login'])->name("login");
Route::post("/register",[AuthController::class,'register'])->name("register");
Route::get("/logout",[AuthController::class,'logout'])->name("logout");
// end auth routes

// employee routes
Route::post("/add-employee",[DashboardController::class,'addEmploye'])->name("addEmploye");
// end employee routes
// companie routes
Route::post("/add-companie",[CompanyController::class,'addCompanie'])->name("addCompanie");
// end companie routes

// job catagory routes
Route::post("/add-job-catagory",[JobCatagoryController::class,'addJobCatagory'])->name("addJobCatagory");
Route::get("/edit-job-catagory/{jobCatagory}",[JobCatagoryController::class,'editJobCatagory'])->name("editJobCatagory");
Route::post("/update-job-catagory/{jobCatagory}",[JobCatagoryController::class,'updateJobCatagory'])->name("updateJobCatagory");
Route::get("/delete-job-catagory/{jobCatagory}",[JobCatagoryController::class,'deleteJobCatagory'])->name("deleteJobCatagory");
// end job catagory routes
// job routes
Route::post("/jobs/create",[JobController::class,'createJob'])->name("createJob");
Route::get("/jobs/{job}",[JobController::class,'showJob'])->name("showJob");
Route::get("/delete-jobs/{job}",[JobController::class,'deleteJob'])->name("deleteJob");
Route::get("/edit-jobs/{job}",[JobController::class,'editJob'])->name("editJob");
Route::post("/update-jobs/{job}",[JobController::class,'updateJob'])->name("updateJob");
// end job routes
// candidate routes
Route::post("/createCandidate",[CandidateController::class,'createCandidate'])->name("createCandidate");
// end candidate routes
