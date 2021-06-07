<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Employee;
use Faker\Factory as Faker;

class EmpPosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $emps = Employee::all();
        foreach ($emps as $emp) {
            if (is_null($emp->position_id)) {
                $emp->position_id = rand(6,8);
                $emp->save();
            }
        }
    }
}
