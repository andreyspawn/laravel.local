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
//       $departments = DB::select("with recursive cte (id, department_name, parent_id) as (
//       select     id,
//             department_name,
//             parent_id
//  from       departments
//  where      parent_id = 1
//  union all
//  select     p.id,
//             p.department_name,
//             p.parent_id
//  from       departments p
//  inner join cte
//          on p.parent_id = cte.id
//)
//select * from cte");
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

   public function chief() {
       return $this->hasOne(Employee::class,'')
   }



}


