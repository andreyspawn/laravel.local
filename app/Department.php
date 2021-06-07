<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Department extends Model
{
    private $listLevel;

    //return all object of class for that level
    public function departments() {
       return $this->hasMany(Department::class,'parent_id');
    }

    //return all object of class for that level and lower and lower through recursion link hasMany
    public function childrenDepartments() {
       return $this->hasMany(Department::class,'parent_id')->with('departments');
    }

   //chief department
   public function chief() {
       return $this->hasOne(Employee::class,'id','chief_id');
   }

   public function getListLevel() {

        $result = $this->department_name;
        $id = $this->parent_id;

        while ($id) {
            $result = Department::all()->find($id)->department_name.' >> '.$result;
            $id = Department::all()->find($id)->parent_id;
        }

        return $result;
    }

}


