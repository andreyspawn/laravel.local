<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable=[
         'last_name',
         'name',
         'fathers_name',
         'date_in',
         'email',
         'photo'
        ];


}
