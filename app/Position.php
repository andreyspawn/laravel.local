<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //position has many employees
    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
