<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $table = 'students';
    public $primaryKey = 'id';
    public $fillable = [
        'student_name',
        'father_name',
        'gender',
        'cnic',
        'phone_no',
        'address'
    ];
    public function getProgram(){
        return $this->hasOne(Program::class);
    }
}