<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Department extends Model
{
    //return all children for determining level
   static public function getChild($level) {
       $departments = DB::select("SELECT id, department_name FROM departments where parent_id=?",[$level]);
       return $departments;
    }

    //return all object of class for that level
    public function departments() {
       return $this->hasMany(Department::class,'parent_id');
    }

    //
    public function childrenDepartments() {
       return $this->hasMany(Department::class,'parent_id')->with('departments');
    }

    //определение шефа подразделения
   public function chief() {
       return $this->hasOne(Employee::class,'id','chief_id');
   }



}


