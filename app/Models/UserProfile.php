<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'phone_number', 'about'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

    // public function certifications()
    // {
    //     return $this->hasMany(Certification::class);
    // }

    // public function awards()
    // {
    //     return $this->hasMany(Award::class);
    // }
}