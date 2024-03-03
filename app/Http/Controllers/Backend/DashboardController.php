<?php

namespace App\Http\Controllers\Backend;

use App\Models\Job;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.pages.home');
    }

    public function comapnies(){
        return view('backend.pages.company_table');
    }

    public function addCompanieForm(){
        return view('backend.pages.add_company');
    }

    public function jobsCatagory(){
        $datas = JobCategory::all();
        return view("backend.pages.job_catagory_table",compact('datas'));
    }

    public function addJobCatagoryForm(){
        return view("backend.pages.add_job_catagory");
    }

    public function jobs(){
        $datas = Job::all();
        return view('backend.pages.job_table',compact('datas'));
    }
    public function addJobForm(){
        $datas = JobCategory::all();
        return view('backend.pages.add_job',compact('datas'));
    }
    public function employees(){
        return view('backend.pages.employe_table');
    }

    public function addEmploye(){
        return view('backend.pages.add_employe');
    }

    public function blogs(){
        return view('backend.pages.blog_table');
    }

    public function addBlog(){
        return view('backend.pages.add_blog');
    }

    public function pages(){
        return view('backend.pages.page_table');
    }

    public function plugins(){
        return view('backend.pages.plugin_table');
    }
}
