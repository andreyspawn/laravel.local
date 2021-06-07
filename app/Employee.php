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

    //single employee has ONE departments
    public function department() {
        return $this->hasOne(Department::class,'id','department_id');
    }

    public function position() {
        return $this->hasOne(Position::class,'id','position_id');
    }


}
