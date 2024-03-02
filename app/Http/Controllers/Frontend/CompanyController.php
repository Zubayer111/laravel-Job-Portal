<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function addCompanie(Request $request)
    {
        try {
            DB::beginTransaction();
            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'type' => 'employer',
            ]);
            $userId = $users->id;
            $img = $request->file("logo");
            $time = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$userId}-{$time}-{$file_name}";
            $img_url = "uploads/{$img_name}";
            $img->move(public_path('uploads'), $img_name);
            Company::create([
                'user_id' => $userId,
                'name' => $request->name,
                'description' => $request->description,
                'address' => $request->address,
                'logo' => $img_url,
            ]);
            DB::commit();
            //dd($company);
            return redirect('/company-apply-page')->with('success', 'Company applied successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/company-apply-page')->with('success', 'Company applied failed!');
        }
    }

    
}
