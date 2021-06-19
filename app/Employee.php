<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;


class Employee extends Model
{
    //
    protected $fillable = [
        'last_name',
        'name',
        'fathers_name',
        'birthday',
        'date_in',
        'email',
        'note'
    ];

//add data to new record
    public static function add($fields)
    {
        $employee = new self;
        $employee->fill($fields);
        $employee->save();
        return $employee;
    }

    public function set($fields) {
        $this->fill($fields);
        $this->save();
        return $this;
    }

//save image during create records emploeyee
    public function uploadImage($image)
    {
        if ($image === null) {
            return false;
        }
        $filename = 'photo'.$this->id.'.'.$image->extension();
        if ($image->isValid()) {
            $image->storeAs('photo',$filename);
        }
        $this->photo = '/photo/'.$filename;
        $this->save();
        return true;
    }

//set data about position
    public function setPosition($id) {
        if ($id === null) {
            return false;
        }
        $this->position_id=$id;
        $this->save();
        return true;
    }

    //set data about department
    public function setDepartment($id) {
        if ($id === null) {
            return false;
        }
        $this->department_id=$id;
        $this->save();
        return true;
    }

    //single employee has ONE departments
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    //single employee has ONE position
    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

//    public function position()
//    {
//        return $this->hasOne(Position::class, 'id', 'position_id');
//    }


}
