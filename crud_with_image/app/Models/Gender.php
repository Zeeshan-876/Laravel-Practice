<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    public $table = 'genders';
    public $primaryKey = 'gender_id';
    public $fillable = [
        'gender_title'
    ];
}