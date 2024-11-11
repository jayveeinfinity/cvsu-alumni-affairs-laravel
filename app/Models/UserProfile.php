<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'phone_number', 'about'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class)->orderBy('date_started', 'DESC');
    }

    public function work_experiences()
    {
        return $this->hasMany(WorkExperience::class)->orderBy('date_started', 'DESC');
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
