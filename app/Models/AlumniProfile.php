<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniProfile extends Model
{
    use HasFactory;

    protected $table = 'alumni_profiles';

    protected $fillable = [
       'student_number', 'first_name', 'last_name', 'course', 'year_graduated'
    ];
}
