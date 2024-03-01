<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCatagoryController extends Controller
{
    public function addJobCatagory(Request $request){
        JobCategory::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect('/dashboard/jobs-catagory')->with(
            'success' , 'Job Category created successfully!');
        
    }
}
