<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        "name",
        "password",
        "email",
        "otp",
    ];

    protected $attributes = [
        'otp' => 0,
    ];

    protected $hidden = [
        "password",
        "otp",
    ];
    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
