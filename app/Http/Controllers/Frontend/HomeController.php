<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function homePage()
    {
        $companys = Company::take("6")->get();
        $jobs = Job::take("6")->get();
        $blogs = Blog::take("4")->get();
        return view("frontend.pages.home_page",compact("companys","jobs","blogs"));
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
        $blogs = Blog::paginate(4);
        return view("frontend.pages.blog_page", compact("blogs"));
    }

    public function blogDetailsPage($blog){
        $blog = Blog::find($blog);
        return view("frontend.pages.blog_details_page", compact("blog"));
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
