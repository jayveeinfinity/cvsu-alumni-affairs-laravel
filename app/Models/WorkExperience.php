<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_profile_id', 'job_title', 'company_name', 'description', 'start_date', 'end_date'
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class);
    }
}
