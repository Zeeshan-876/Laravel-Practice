<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $table = 'students';
    public $fillable = [
        'student_name','father_name','cnic','gender','address'
    ];
}
