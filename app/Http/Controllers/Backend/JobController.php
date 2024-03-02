<?php

namespace App\Http\Controllers\Backend;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $id = Session::get('company_id');
        $company_id = Company::where('user_id', $user_id)
        ->where("id", $id)->first();
        $job = Job::create([
            'company_id' => $company_id,
            
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'salary' => $request->salary,
            'location' => $request->location,
            'deadline' => $request->deadline,
        ]);
        
        return $job;
        //return redirect('/job-page')->with('success', 'Job created successfully!');
    }
}
