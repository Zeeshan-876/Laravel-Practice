<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table = 'contacts';
    public $fillable = [
        'contact_no'
    ];
    public function getCategory(){
        return $this->hasOne(Category::class);
    }
}
