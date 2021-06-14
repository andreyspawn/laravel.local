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
         'email',
         'birthday',
         'date_in',
         'note'
        ];

    public static function add($fields) {
        $employee = new self();
        $employee->fill($fields);
        $employee->save();
        return $employee;
    }

    public function uploadPhoto($photo) {
        if ($photo === null) {
            return;
        }

        $filename = 'photo'.$this->id.'.'.$photo->extension();

        $path = $photo->storeAs('photos',$filename);
        $this->photo='/'.$path;
        $this->save();

        return $this->photo;





    }

    //single employee has ONE departments
    public function department() {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    //single employee has ONE position
    public function position() {
        return $this->hasOne(Position::class,'id','position_id');
    }


}
