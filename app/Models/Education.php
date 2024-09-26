<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_profile_id', 'degree', 'institution', 'graduation_year', 'latin_honors', 'has_licensure', 'licensure_title'
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class);
    }
}
