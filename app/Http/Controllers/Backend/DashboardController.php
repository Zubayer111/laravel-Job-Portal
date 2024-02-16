<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function jobs(){
        return view('backend.pages.job_table');
    }
    public function addJobForm(){
        return view('backend.pages.add_job');
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
