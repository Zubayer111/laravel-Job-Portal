<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view("frontend.pages.home_page");
    }

    public function jobPage(){
        return view("frontend.pages.job_page");
    }

    public function jobDetailsPage(){
        return view("frontend.pages.job_details_page");
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
}
