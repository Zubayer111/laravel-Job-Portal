<?php

namespace App\Http\Controllers\Backend;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.pages.home');
    }

    public function comapnies(){
        $datas = Company::all();
        return view('backend.pages.company_table',compact('datas'));
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
        $datas = Job::where('company_id', Session::get('company_id'))->get();
        //$datas = Job::all();
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
        $blogs = Blog::where('company_id', Session::get('company_id'))->get();;
        return view('backend.pages.blog_table',compact('blogs'));
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

    public function companiesDetails($company){
        $data = Company::find($company);
        return view('backend.pages.company_details',compact('data'));
    }
}
