<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id', 'company_name', 'start_date', 'end_date', 'description'
    ];
    
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
