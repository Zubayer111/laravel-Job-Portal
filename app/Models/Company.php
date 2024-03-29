<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','name', 'description', 'address', 'logo', 'status' 
    ];

    protected $attributes = [
        'status' => 'inactive',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
