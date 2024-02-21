<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id', 'degree', 'institution', 'department', 'passing_year', 'gpa',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
