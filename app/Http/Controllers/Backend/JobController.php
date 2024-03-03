<?php

namespace App\Http\Controllers\Backend;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function createJob(Request $request)
    {
        $user_id = Auth::user()->id;
        $id = Session::get('company_id');
        $company_id = Company::where('user_id', $user_id)
        ->where("id", $id)->first();
        Job::create([
            'company_id' => $company_id->id,
            'job_category_id' => $request->job_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'salary' => $request->salary,
            'location' => $request->location,
            'deadline' => $request->deadline,
            'employmentstatus' => $request->employmentstatus,
            'experience' => $request->experience,
            'vacancy' => $request->vacancy,
            'skills' => $request->skills
        ]);
        
        return redirect('/dashboard/jobs')->with('success', 'Job created successfully!');
    }

    public function showJob($job){
        $data = Job::where('id', $job)->first();
        return view("backend.pages.job_details", compact('data'));
    }

    public function deleteJob($job){
        $data = Job::where('id', $job)->first();
        $data->delete();
        return redirect('/dashboard/jobs')->with('success', 'Job deleted successfully!');
    }

    public function editJob($job){
        $data = Job::where('id', $job)->first();
        $jobCatagory = JobCategory::all();
        return view("backend.pages.job_edit", compact('data', 'jobCatagory'));
    }

    public function updateJob(Request $request, $job){
        $data = Job::where('id', $job)->first();
        $data->update([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'salary' => $request->salary,
            'location' => $request->location,
            'deadline' => $request->deadline,
            'employmentstatus' => $request->employmentstatus,
            'experience' => $request->experience,
            'vacancy' => $request->vacancy,
            'skills' => $request->skills
        ]);
        return redirect('/dashboard/jobs')->with('success', 'Job updated successfully!');
    }
}
