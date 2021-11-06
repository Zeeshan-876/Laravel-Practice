<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public $table = 'programs';
    public $primaryKey = 'id';
    public $fillable = [
        'program_title'
    ];
    public function getCoordinator(){
        return $this->hasOne(Coordinator::class);
    }
}