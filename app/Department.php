<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Department extends Model
{
    //
    public function getChild($level) {

        $departments = self::
        return $departments;


//        $maxLevel = self::max('parent_id');
//        $name = self::where('id','=',1)->pluck('department_name');
//        dd($name[0]);
//        $departments=[];
//        for ($i=1; $i <= $maxLevel; $i++) {
//            $departments[$i][]=self::where('parent_id','=',$i)->pluck('department_name')->toArray();
//        }
//        dd($departments);
//        return $maxLevel;
//        for ($i=1;$i <= $maxLevel;$i++) {
//            $departments[$i] = $this::where(\)
//        }
    }

}
