<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = 'customers';
    public $fillable = [
        'customer_name',
        'father_name',
        'cnic',
        'dateofbirth'
    ];

    public function getContact(){
        return $this->hasOne(Contact::class);
    }
}
