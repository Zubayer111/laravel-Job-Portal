<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id', 'title', 'short_description', 'description', 'image',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
