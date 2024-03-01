<?php

namespace App\Http\Controllers\Backend;

use App\Models\Job;
use Illuminate\Http\Request;
use Faker\Provider\nl_NL\Company;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            "company_id" => "required|exists:companies,id",
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'salary' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
        ]);


        $job = Job::create([
            'company_id' => $request->company_id,
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
