<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $companys = Company::all();
        $jobs = Job::all();
        return view("frontend.pages.home_page",compact("companys","jobs"));
    }

    public function jobPage(){
        $jobs = Job::all();
        return view("frontend.pages.job_page", compact("jobs"));
    }

    public function jobDetailsPage($job){
        $job = Job::find($job);
        return view("frontend.pages.job_details_page", compact("job"));
    }

    public function aboutPage(){
        return view("frontend.pages.about_page");
    }

    public function contactPage(){
        return view("frontend.pages.contact_page");
    }

    public function loginPage(){
        return view("frontend.pages.login_page");
    }

    public function registrationPage(){
        return view("frontend.pages.registration_page");
    }

    public function blogPage(){
        return view("frontend.pages.blog_page");
    }

    public function blogDetailsPage(){
        return view("frontend.pages.blog_details_page");
    }

    public function companyPage(){
        return view("frontend.pages.company_form_page");
    }

    public function profilePage(){
        return view("frontend.pages.profile_page");
    }

    public function jobApplicationPage($job){
        $job = Job::find($job);
        return view("frontend.pages.apply_page", compact("job"));
    }
}
