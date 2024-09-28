<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable = [
        'firstname'
            , 'lastname' 
            , 'birthdate' 
            , 'nationality'  
            , 'country' 
            , 'state' 
            , 'zip_code' 
            , 'gender'  
            , 'user_type' 
            , 'email'       
            , 'password'
    ];
}
