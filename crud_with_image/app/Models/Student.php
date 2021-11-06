<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $primaryKey = 'student_id';
    public $table = 'students';
    public $fillable = [
        'student_name',
        'father_name',
        'student_email',
        'course_id',
        'gender_id',
        'DOB',
        'city_id',
        'address',
        'student_profile_image'
    ];
}