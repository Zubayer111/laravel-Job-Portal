<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'father_name', 'mother_name',
        'date_of_birth', 'blood_group', 'social_id', 'passport_no', 'mobile_no',
        'emergency_contact_no', 'address', 'email', 'whatsapp', 'linkedin_link',
        'facebook_link', 'github_link', 'behance_dribble_link', 'portfolio_website',
        'resume', 'image_url', 'skills', 'expected_salary'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(EducationalInformation::class);
    }
}
