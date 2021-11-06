<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $primaryKey = 'std_id';
    public $fillable = [
        'std_name','std_img'
    ];
}