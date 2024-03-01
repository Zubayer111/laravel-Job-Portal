<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'job_category_id', 'title', 'description', 'requirements', 'salary', 'location', 'deadline',"employmentstatus",
    ];

    protected $dates = [
        'deadline',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
