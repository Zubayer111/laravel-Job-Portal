<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function addCompanie(Request $request)
    {
        // $request->validate([
        //     'user_id' => 'required|exists:users,id',
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'address' => 'nullable|string|max:255',
        //     'logo' => 'nullable|image|max:2048',
        // ]);
        $user = Auth::user();
        $userId = $user->id;

        $img = $request->file("logo");
            $time = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$userId}-{$time}-{$file_name}";
            $img_url = "uploads/{$img_name}";
            $img->move(public_path('uploads'),$img_name);
         Company::create([
            'user_id' => $userId,
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'logo' => $img_url,
        ]);
        
        return redirect('/company-apply-page')->with('success', 'Company applied successfully!');
    }
}
