<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentall extends Model
{
    protected $fillable = [
        'firstName' , 'lastName' , 'contact' , 'address' , 'bod'
    ];
}
