<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JobCatagoryController extends Controller
{
    public function addJobCatagory(Request $request){
        try{
            $company_id = Session::get('company_id');
            JobCategory::create([
                'company_id' => $company_id,
                'name' => $request->name,
                'description' => $request->description
            ]);
        return redirect('/dashboard/jobs-catagory')->with(
            'success' , 'Job Category created successfully!');
        }
        catch(Exception $e){
            return redirect('/dashboard/jobs-catagory')->with(
                'success' , 'Job Category allrady exists!');
        }
    }

    public function editJobCatagory($jobCatagory){
        $jobCatagory = JobCategory::find($jobCatagory);
        return view('backend.pages.jobCatagory_edit',compact('jobCatagory'));
    }

    public function updateJobCatagory(Request $request, $jobCatagory){
        $jobCatagory = JobCategory::find($jobCatagory);
        $jobCatagory->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect('/dashboard/jobs-catagory')->with(
            'success' , 'Job Category updated successfully!');
    }

    public function deleteJobCatagory($jobCatagory){
        $jobCatagory = JobCategory::find($jobCatagory);
        $jobCatagory->delete();
        return redirect('/dashboard/jobs-catagory')->with(
            'success' , 'Job Category deleted successfully!');
    }

    
}
