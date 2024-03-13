<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Job;
use App\Models\Company;
use App\Models\Application;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Models\JobExperiences;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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

    public function storeJobApplication(Request $request, $job){
        try{
            DB::beginTransaction();
        $job_id = Job::findOrFail($job)->id;;
        $candidate_id = Session::get('candidate_id');

        $img = $request->file("resume");
            $time = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$candidate_id}-{$time}-{$file_name}";
            $img_url = "uploads/resume/{$img_name}";
            $img->move(public_path('uploads/resume'), $img_name);

        Application::create([
            'job_id' => $job_id,
            'candidate_id' => $candidate_id,
            'status' => "applied",
            'cover_letter' => $request->cover_letter,
            'resume' => $img_url
        ]);

        JobExperiences::create([
            'candidate_id' => $candidate_id,
            'company_name' => $request->company_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description
        ]);

        DB::commit();
        return redirect('/dashboard/profile')->with('success', 'Application created successfully!');
       
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/dashboard/jobs')->with('success', 'Application created failed!');
        }
    }
}
