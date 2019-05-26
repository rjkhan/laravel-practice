<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    
    protected $fillable = [
    	'id',
       'first_name',
       'last_name'
    ];
}
