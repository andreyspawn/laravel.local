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

    public static function add($fields)
    {
        $employee = new self;
        $employee->fill($fields);
        $employee->save();
        return $employee;
    }

    public function uploadImage($image)
    {
        if ($image === null) {
            return;
        }
        dd($image);
    }

    //single employee has ONE departments
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function position()
    {
        return $this->hasOne(Position::class, 'id', 'position_id');
    }


}
