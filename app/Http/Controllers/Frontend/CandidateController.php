<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EducationalInformation;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function createCandidate(Request $request){
       try{
        DB::beginTransaction();

        $user_id = Auth::user()->id;

        $img = $request->file("image_url");
            $time = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$user_id}-{$time}-{$file_name}";
            $img_url = "uploads/{$img_name}";
            $img->move(public_path('uploads'), $img_name);

        $candidate = Candidate::create([
            'user_id' => $user_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'date_of_birth' => $request->date_of_birth,
            'blood_group' => $request->blood_group,
            'mobile_no' => $request->mobile_no,
            'emergency_contact_no' => $request->emergency_contact_no,
            'address' => $request->address,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'linkedin_link' => $request->linkedin_link,
            'facebook_link' => $request->facebook_link,
            'github_link' => $request->github_link,
            'behance_dribble_link' => $request->behance_dribble_link,
            'portfolio_website' => $request->portfolio_website,
            'image_url' => $img_url,
            'skills' => $request->skills,
        ]);
        
        $candidate_id = $candidate->id;
        //$educationalInfo = $request->only('degree', 'institution', 'department', 'passing_year', 'gpa');
        //return $educationalInfo;
        // echo "<pre>";
        // print_r($request->all());
        // die;
        foreach($request->degree as $key => $edu){ {
            
             EducationalInformation::create([
                "candidate_id" => $candidate_id,
                "degree" => $edu[$key],
                "institution" => $request->institution[$key],
                "department" => $request->department[$key],
                "passing_year" => $request->passing_year[$key],
                "gpa" => $request->gpa[$key],
            ]);
           
        }
        }
        $request->session()->put("candidate_id", $candidate->id);
        DB::commit();

        return redirect("/dashboard/profile");
       }
       catch(\Exception $e){
        DB::rollBack();
        return redirect()->back()->with('success', $e->getMessage());
       }
    } 
}
