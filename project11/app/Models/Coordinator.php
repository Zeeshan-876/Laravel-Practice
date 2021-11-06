<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;
    public $table = 'coordinators';
    public $primaryKey = 'id';
    public $fillable = [
        'coordinator_name'
    ];
}